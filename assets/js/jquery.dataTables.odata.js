/**
 * @summary     DataTables OData addon
 * @description Enables jQuery DataTables plugin to read data from OData service.
 * @version     1.0.4
 * @file        jquery.dataTables.odata.js
 * @authors     Jovan & Vida Popovic
 *
 * @copyright Copyright 2014 Jovan & Vida Popovic, all rights reserved.
 *
 * This source file is free software, under either the GPL v2 license or a
 * BSD style license, available at:
 *   http://datatables.net/license_gpl2
 *   http://datatables.net/license_bsd
 * 
 * This source file is distributed in the hope that it will be useful, but 
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
 * or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.
 * 
 */

function fnServerOData(sUrl, aoData, fnCallback, oSettings) {
    var oParams = {};
    var fullname;
    $.each(aoData, function (i, value) {
        oParams[value.name] = value.value;

    });

    var data = {
        "$format": "json"
    };

    // If OData service is placed on the another domain use JSONP.
    var bJSONP = oSettings.oInit.bUseODataViaJSONP;

    if (bJSONP) {
        data.$callback = "odatatable_" + (oSettings.oFeatures.bServerSide ? oParams.sEcho : ("load_" + Math.floor((Math.random() * 1000) + 1)));
    }

    $.each(oSettings.aoColumns, function (i, value) {
        var sFieldName = (value.sName !== null && value.sName !== "") ? value.sName : ((typeof value.mData === 'string') ? value.mData : null);
        if (sFieldName === null || !isNaN(Number(sFieldName))) {
            sFieldName = value.sTitle;
        }
        if (sFieldName === null || !isNaN(Number(sFieldName))) {
            return;
        }
        if (data.$select == null) {
            data.$select = sFieldName;
        } else {
            data.$select += "," + sFieldName;
        }
    });

    if (oSettings.oFeatures.bServerSide) {

        data.$skip = oSettings._iDisplayStart;
        if (oSettings._iDisplayLength > -1) {
            data.$top = oSettings._iDisplayLength;
        }

        // OData versions prior to v4 used $inlinecount=allpages; but v4 is uses $count=true
        if (oSettings.oInit.iODataVersion !== null && oSettings.oInit.iODataVersion < 4) {
            data.$inlinecount = "allpages";
        } else {
            data.$count = true;
        }

        var asFilters = [];
        var asColumnFilters = []; //used for jquery.dataTables.columnFilter.js
        $.each(oSettings.aoColumns,
            function (i, value) {

                var sFieldName = value.sName || value.mData;
                var columnFilter = oParams["sSearch_" + i]; //fortunately columnFilter's _number matches the index of aoColumns

                if ((oParams.sSearch !== null && oParams.sSearch !== "" || columnFilter !== null && columnFilter !== "") && value.bSearchable) {
                    switch (value.sType) {
                    case 'string':
                    case 'html':

                        if (oParams.sSearch !== null && oParams.sSearch !== "")
                        {
                            // asFilters.push("substringof('" + oParams.sSearch + "', " + sFieldName + ")");
                            // substringof does not work in v4???
                            asFilters.push("indexof(tolower(" + sFieldName + "), '" + oParams.sSearch.toLowerCase() + "') gt -1");
                        }

                        if (columnFilter !== null && columnFilter !== "") {
                            asColumnFilters.push("indexof(tolower(" + sFieldName + "), '" + columnFilter.toLowerCase() + "') gt -1");
                        }
                        break;

                    case 'date':
                    case 'numeric':
                        var fnFormatValue = 
                            (value.sType == 'numeric') ? 
                                function(val) { return val; } :
                                function(val) { 
                                        // Here is a mess. OData V2, V3, and V4 se different formats of DateTime literals.
                                        switch(oSettings.oInit.iODataVersion){
                                                // V2 works with the following format:
                                                // http://services.odata.org/V2/OData/OData.svc/Products?$filter=(ReleaseDate+lt+2014-04-29T09:00:00.000Z)                                                              
                                                case 4: return (new Date(val)).toISOString(); 
                                                // V3 works with the following format:
                                                // http://services.odata.org/V3/OData/OData.svc/Products?$filter=(ReleaseDate+lt+datetimeoffset'2008-01-01T07:00:00')
                                                case 3: return "datetimeoffset'" + (new Date(val)).toISOString() + "'";  
                                                // V2 works with the following format:
                                                // http://services.odata.org/V2/OData/OData.svc/Products?$filter=(ReleaseDate+lt+DateTime'2014-04-29T09:00:00.000Z')
                                                case 2: return "DateTime'" + (new Date(val)).toISOString() + "'"; 
                                        }
                                }

                        // Currently, we cannot use global search for date and numeric fields (exception on the OData service side)
                        // However, individual column filters are supported in form lower~upper
                        if (columnFilter !== null && columnFilter !== "" && columnFilter !== "~") {
                            asRanges = columnFilter.split("~");
                            if (asRanges[0] !== "") {
                                asColumnFilters.push("(" + sFieldName + " gt " + fnFormatValue(asRanges[0]) + ")");
                            }

                            if (asRanges[1] !== "") {
                                asColumnFilters.push("(" + sFieldName + " lt " + fnFormatValue(asRanges[1]) + ")");
                            }
                        }
                        break;
                    default:
                    }
                }
            });

        if (asFilters.length > 0) {
            data.$filter = asFilters.join(" or ");
        }

        if (asColumnFilters.length > 0) {
            if (data.$filter !== undefined) {
                data.$filter = " ( " + data.$filter + " ) and ( " + asColumnFilters.join(" and ") + " ) ";
            } else {
                data.$filter = asColumnFilters.join(" and ");
            }
        }

        var asOrderBy = [];
        for (var i = 0; i < oParams.iSortingCols; i++) {
            asOrderBy.push(oParams["mDataProp_" + oParams["iSortCol_" + i]] + " " + (oParams["sSortDir_" + i] || ""));
        }

        if (asOrderBy.length > 0) {
            data.$orderby = asOrderBy.join();
        }
    }
    $.ajax(jQuery.extend({}, oSettings.oInit.ajax, {
        "url": sUrl,
        "data": data,
        "jsonp": bJSONP,
        "dataType": bJSONP ? "jsonp" : "json",
        "jsonpCallback": data["$callback"],
        "cache": false,
        "success": function (data) {
            
            var isActualTime = ' (A)';
            var dateFormat = 'trackList';
            var model = data.value;
            
            $.each(model, function (propID, propObj) {
                
                $.each(propObj, function (propName, propValue) {
                           
		                	
		                         if(model[propID]['country_deliver']!=="" && model[propID]['place_deliver']!=="")
		                	model[propID]['country_deliver_place_deliver'] = model[propID]['country_deliver']+', '+model[propID]['place_deliver'];
		                         else if(model[propID]['country_deliver']!=="")
		                        	 model[propID]['country_deliver_place_deliver'] = model[propID]['country_deliver'];				                   
		                         else
		                        	 model[propID]['country_deliver_place_deliver'] = model[propID]['place_deliver'];	
		                         // console.log(propValue);
		                	
		                	model[propID]['country_loading_place_loading'] = model[propID]['country_loading']+', '+model[propID]['place_loading'];
			                   
                	
		                	 if(model[propID]['country_loading']!=="" && model[propID]['place_loading']!=="")
				                	model[propID]['country_loading_place_loading'] = model[propID]['country_loading']+', '+model[propID]['place_loading'];
				                         else if(model[propID]['country_loading']!=="")
				                        	 model[propID]['country_loading_place_loading'] = model[propID]['country_loading'];				                   
				                         else
				                        	 model[propID]['country_loading_place_loading'] = model[propID]['place_loading'];
		                	
		                	
		                	
                            if(propName === 'DeliveredOn')
                            {
                                //console.log('here');
                                if((propValue === "" || propValue === null))
                                {
                                	//console.log('here2');
                                     //console.log(model[propID]['DeliveryReqBy']);
                                    if(model[propID]['DeliveryReqBy'] === 'undefined' || model[propID]['DeliveryReqBy'] === "" || model[propID]['DeliveryReqBy'] === null || typeof model[propID]['DeliveryReqBy'] !== 'undefined')
                                    {
                                        //console.log('here3');
                                        //console.log(realATA[model['consolID']]);
                                        if(typeof model[propID]['consolID'] !== 'undefined' && model[propID]['consolDate'] !== "" && model[propID]['consolDate'] !== null)
                                        {
                                           
                                            if(model[propID]['consolDate'] !== '-|(E)')
                                            {
                                                var time = model[propID]['consolDate'].split("-|");
                                                    propValue = time[0];
                                                    isActualTime = ' '+time[1];
                                                    //console.log(propValue);
                                                    dateFormat = 'trackListT';
                                            }
                                            else if(model[propID]['consolEstDate'] !== 'undefined' && model[propID]['consolEstDate'] !== "" && model[propID]['consolEstDate'] !== null)
                                            {
                                                //console.log('time[2]');
                                                propValue = model[propID]['consolEstDate'];
                                                dateFormat = 'trackListT';
                                                isActualTime = ' (E)';
                                                //console.log(propValue);
                                            }
                                            else if(model[propID]['ETA_Warehouse'] !== 'undefined' && model[propID]['ETA_Warehouse'] !== "" && model[propID]['ETA_Warehouse'] !== null)
                                            {
                                                //console.log('time[4]');
                                                propValue = model[propID]['ETA_Warehouse'];
                                                dateFormat = 'trackList';
                                                isActualTime = ' (E)';
                                            }
                                            else if(model[propID]['STATUS_DATE'] !== 'undefined' && model[propID]['STATUS_DATE'] !== "" && model[propID]['STATUS_DATE'] !== null)
                                            {
                                                //console.log('time[4]');
                                                propValue = model[propID]['STATUS_DATE'];
                                                dateFormat = 'trackList';
                                                isActualTime = ' (A)';
                                            }
                                        }
                                        
                                        //CallAPISync('GET','/track/getATA/'+model['consolID'], function(e){  propValue = e; dateFormat = 'trackListT';}, function(){ })
                                     }
                                    else
                                    {
                                        //console.log('here4');
                                        propValue = model[propID]['DeliveryReqBy'];
                                        isActualTime = ' (E)';
                                    }

                                }
                                else
                                {
                                    isActualTime = ' (A)';
                                }
                                
                                propObj.DeliveredOn = ParseDate(propValue, dateFormat) + ' '+ isActualTime;
                            }
                            
                            

                            if(propName === 'DocumentDate')
                            {
                                
                                if((propValue === "" || propValue === null) || (model[propID]['TIMESTAMP'] !== '' && model[propID]['TIMESTAMP'] !== null))
                                {
                                   
                                    propValue = model[propID]['TIMESTAMP'];
                                    //console.log(propValue+"-"+model['UMLRef']);
                                    dateFormat = 'trackList';
                                    if(propValue.indexOf('T') > -1)
                                    {
                                      dateFormat = 'trackListT';
                                    }
                                }
                                else
                                {
                                    dateFormat = 'trackList';
                                    if(propValue.indexOf('T') > -1)
                                    {
                                      dateFormat = 'trackListT';
                                    }
                                    //dateFormat = 'trackListT';
                                    //console.log(propValue+"-"+model['UMLRef']);
                                }
                                
                                propObj.DocumentDate = ParseDate(propValue, dateFormat);
                            }

                            
                            if(propName === 'TIMESTAMP')
                            {
                                    //console.log(propValue+"-"+model['UMLRef']);
                                    dateFormat = 'trackList';
                                    if(propValue.indexOf('T') > -1)
                                    {
                                      dateFormat = 'trackListT';
                                    }
                                propObj.TIMESTAMP = ParseDate(propValue, dateFormat);
                            }

                            if(propName === 'ExternalRef')
                            {
                                if(propValue === "" || propValue == null || String(propValue) == 'NULL')
                                {
                                    if( model[propID]['AgentRef'] !== "" &&  model[propID]['AgentRef'] != null)
                                    {
                                        propValue = model[propID]['AgentRef'];
                                        if(propValue === 'DONE' || propValue === 'done')
                                        {
                                            propValue = '';
                                        }
                                    }

                                }
                                                              
                                 propObj.ExternalRef = propValue;
                            }


                            if(propName === 'Category')
                            {
                                var icon = Base_URL + "/assets/images/doc_types/commercial_green.png";
                                var instruction = "COMMERCIAL DOCUMENT";
                                switch (propValue)
                                {
                                    case 'TRANSPORT':
                                        icon = Base_URL + "/assets/images/doc_types/transport_green.png";
                                        instruction = "TRANSPORT DOCUMENT";
                                        break;
                                    case 'OPERATIONAL':
                                        icon = Base_URL + "/assets/images/doc_types/operational_green.png";
                                        instruction = "OPERATIONAL DOCUMENT";
                                        break;
                                    case 'FINANCIAL':
                                        icon = Base_URL + "/assets/images/doc_types/financial_green.png";
                                        instruction = "FINANCIAL DOCUMENT";
                                        break;
                                    case 'COMMERCIAL':
                                        icon = Base_URL + "/assets/images/doc_types/commercial_green.png";
                                        instruction = "COMMERCIAL DOCUMENT";
                                        break;
                                }
                                propValue = '<center><img src="'+icon+'" title="'+instruction+'" /></center>';
                                propObj.Category = propValue;
                            }

                            if(propName === 'desc_display')
                            {
                                
                                var countArray = new Array();

                                CallAPISync("GET", "/documents/getpratkadocuments/"+model[propID]['PratkaID'], function (countdata) {
                                    var dat = JSON.parse(countdata);
                                    $.each(dat, function(id){
                                        countArray[dat[id]['Descr']] = dat[id]['count_docs'];

                                    });
                                });

                                
                                if(parseInt(countArray[model[propID]['Descr']]) > 1)
                                {
                                    propValue = propValue + ' - ' + model[propID]['DocumentName'];
                                }
                                propObj.desc_display = propValue;
                            }
                            //
                             if(propName === 'content_type') { 
                                 var iconType;
                                 switch (propValue)
                                {
                                    case 'application/pdf':
                                        iconType = '<span class="btn btn-mini btn-danger" style="margin-left:5px;"><i class="icon-file"></i></span>';
                                        break;
                                    case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                                        iconType = '<span class="btn btn-mini btn-success" style="margin-left:5px;"><i class="icon-file"></i></span>';
                                        break;
                                    case 'image/jpeg':
                                        iconType = '<span class="btn btn-mini btn-success" style="margin-left:5px;background-color: #bd7a9d;"><i class="icon-picture"></i></span>';
                                        break; 
                                } 
                                
                                propValue = iconType;
                                 propObj.content_type = propValue;
                             }
                            //
                            if(propName === 'doc_path') { 
                                propValue = '<center><a href="'+Base_URL+'/user_documents/'+propValue+'"><span class="btn btn-mini btn-success" style="margin-left:5px;" ><i class="icon-download-alt bigger-120"></i></span></a></center>';
                                propObj.doc_path = propValue;
                            }
                            //
//                            if(propName === 'reporter_id') {  
//                                var fname = new Array();
//                                CallAPISync("GET", "/api/fullname/get/"+propValue, function (data) {
//                                    var dat = JSON.parse(data);
//                                    $.each(dat, function(id, value){
//                                        fname[id] = value;                                        
//                                    });
//                                });
//                                //     
//                                propValue = fname['firstname'] + ' ' + fname['lastname'];
//                                propObj.reporter_id = propValue;
//                            }
//                            //
                            if(propName === 'id') { 
                                propObj.team_id = propValue;
                            }
                            if(propName === 'assigner_id') { 
                                var lname = new Array();
                                if(propObj.team_id !== '0') {

                                    CallAPISync("GET", "/api/teams/get/"+propObj.team_id, function (data) {
                                        propValue = '<span class="blue"><i class="icon-group"></i>&nbsp;<strong>'+JSON.parse(data)+'</strong></span>';                                        
                                    });
                                } else { 
                                    CallAPISync("GET", "/api/assigner/get/"+propValue+"/"+propObj.team_id, function (data) {
                                    var dat = JSON.parse(data);
                                        $.each(dat, function(id, value){
                                            lname[id] = value;                                        
                                        });
                                    });
                                   propValue = '<span style="color:#007c66"><i  class="icon-user"></i>&nbsp;'+lname['firstname'] + ' ' + lname['lastname']+'</span>'; 
                                }
                                
                                //     
                                
                                propObj.assigner_id = propValue;
                            }
                            
                            if(propName === 'status') {
                                var labelClass;
                               
                                switch (propValue)
                                {
                                    case 'pause':
                                        labelClass = 'label-warning';
                                        break;
                                    case 'Pause':
                                        labelClass = 'label-warning';
                                        break;
                                    case 'completed':
                                        labelClass = 'label-success arrowed-in-right arrowed-in';
                                        break;
                                    
                                    case 'inprogress':
                                        labelClass = 'label-success arrowed arrowed-in';
                                        break;
                                    case 'In progress':
                                        labelClass = 'label-success arrowed arrowed-in';
                                        break;
                                    case 'new':
                                        labelClass = 'label-info';
                                        break;
                                    case 'Quoted':
                                        labelClass = 'label-info';
                                        break;
                                    case 'assigned':
                                        labelClass = 'label-important arrowed-in';
                                        break;
                                    case 'Assigned':
                                        labelClass = 'label-important arrowed-in';
                                        break;
                                    case 'draft':
                                        labelClass = 'label-inverse arrowed-in';
                                        break;  
                                    case 'accepted':
                                       labelClass = 'label-success arrowed-in-right arrowed-in';
                                       break;
                                    case 'Accepted':
                                        labelClass = 'label-success arrowed-in-right arrowed-in';
                                        break;
                                    case 'Rejected':
                                        labelClass = 'label-important arrowed-in-right arrowed-in';
                                        break;
                                    case 'rejected':
                                        labelClass = 'label-important arrowed-in-right arrowed-in';
                                        break;
                                    case 'Expired':
                                        labelClass = 'label-important arrowed-in-right arrowed-in';
                                        break;
                                    case 'expired':
                                        labelClass = 'label-important arrowed-in-right arrowed-in';
                                        break;
                                }
                                var labelName="";
                              if(lang==="bg")
                              {
                                 switch (propValue)
                                {
                                    case 'pause':
                                        labelName ='Пауза';
                                        break;
                                    case 'Pause':
                                       labelName ='Пауза';
                                        break;
                                    case 'completed':
                                        labelName ='Офериранo';
                                        break;                                   
                                    case 'inprogress':
                                        labelName ='Работи се';
                                        break;
                                    case 'In progress':
                                        labelName ='Работи се';
                                        break;
                                    case 'new':
                                        labelName ='Новo';
                                        break;
                                    case 'New':
                                        labelName ='Новo';
                                        break;
                                    case 'Quoted':
                                        labelName ='Офериранo';
                                        break;
                                    case 'assigned':
                                        labelName ='Назначенo';
                                        break;
                                    case 'Assigned':
                                        labelName ='Назначенo';
                                        break;
                                    case 'submitted':
                                        labelName ='Изпратенo';
                                        break;
                                    case 'Submitted':
                                        labelName ='Изпратенo';
                                        break;
                                    case 'draft':
                                        labelName ='Чернова';
                                        break;  
                                    case 'accepted':
                                       labelName ='Приетo';
                                       break;
                                    case 'Accepted':
                                        labelName ='Приетo';
                                        break;
                                    case 'Rejected':
                                        labelName ='Отхвърлена';
                                        break; 
                                    case 'rejected':
                                        labelName ='Отхвърлена';
                                        break;
                                    case 'Expired':
                                        labelName ='Изтекла';
                                        break; 
                                    case 'expired':
                                        labelName ='Изтекла';
                                        break;    
                                }  
                              }else{
                                  labelName =propValue;
                              }
                                propValue = '<span class="label '+labelClass+'">'+labelName+'</span>';
                                propObj.status = propValue;
                            }

                            if(propName === 'TransportMode' || propName === 'transport_mode')
                            {
                                var icon = Base_URL + "/assets/images/tricons/pickup.png";
                                var instruction = "Domestic transport";
                                switch (propValue)
                                {
                                    case 'SEA':
                                        icon = Base_URL + "/assets/images/tricons/cargo_ship.png";
                                        instruction = "Ocean transport";
                                        break;
                                    case 'LCL':
                                        icon = Base_URL + "/assets/images/tricons/cargo_ship.png";
                                        instruction = "Ocean transport";
                                        break;
                                    case 'FCL':
                                        icon = Base_URL + "/assets/images/tricons/cargo_ship.png";
                                        instruction = "Ocean transport";
                                        break;
                                    case 'AIR':
                                        icon = Base_URL + "/assets/images/tricons/airplane.png";
                                        instruction = "Air transport";
                                        break;
                                    case 'ROA':
                                        icon = Base_URL + "/assets/images/tricons/truck.png";
                                        instruction = "International road transport";
                                        break;
                                }
                                propValue = '<img src="'+icon+'" title="'+instruction+'" />';
                                if(propName === 'TransportMode')
                                {
                                    propObj.TransportMode = propValue;
                                }
                                else
                                {
                                    propObj.transport_mode = propValue;
                                }
                                
                            }

                            if(propName === 'status_full_name')
                            {
                                //console.log(propValue);
                                //propValue = model['parameter'];
                                var icon = Base_URL + "/assets/images/tricons/registered.png";
                                var instruction = propObj.status_full_name;
                                
                                if(propValue.indexOf("Accepted") > -1)
                                {
                                    icon = Base_URL + "/assets/images/tricons/received_box.png";
                                }
                                else if(propValue.indexOf("Collected from Customer") > -1)
                                {
                                    icon = Base_URL + "/assets/images/tricons/received_box.png";
                                }
                                else if(propValue.indexOf("Received") > -1)
                                {
                                    icon = Base_URL + "/assets/images/tricons/received_box.png";
                                }
                                else if(propValue.indexOf("Shipped") > -1)
                                {
                                    icon = Base_URL + "/assets/images/tricons/arrival_box.png";
                                }
                                else if(propValue.indexOf("Departed") > -1)
                                {
                                    icon = Base_URL + "/assets/images/tricons/departed_box.png";
                                }
                                else if(propValue.indexOf("Arrived") > -1)
                                {
                                    icon = Base_URL + "/assets/images/tricons/received_box.png";
                                }

                                propValue = '<center><img src="'+icon+'" title="'+instruction+'" /></center>';
                                //propObj.finale_status = propValue;
                                
                                propObj.status_full_name = propValue;
                            }


                            if(propName === 'reg_date' || propName === 'activate_date')
                            {
                                if(propValue !== "" && propValue != null)
                                {
                                    var cdate = new Date(propValue * 1000);
                                    propValue = cdate.getDate()+'/'+cdate.getMonth()+'/'+cdate.getFullYear();
                                }else{
                                    propValue = 'n/a';
                                }
                                if(propName === 'reg_date')
                                {
                                    propObj.reg_date = ParseDate(propValue, dateFormat);
                                }
                                else
                                {
                                    propObj.activate_date = ParseDate(propValue, dateFormat);
                                }
                              
                            }

                            if(propName === 'date_readiness' )
                            {
                                if(propValue !== "" && propValue != null)
                                {

                                }else{
                                    propValue = 'n/a';
                                }
                                 propObj.date_readiness = propValue;
                            }

                            if(propName === 'last_login')
                            {
                                if(propValue !== "" && propValue != null)
                                {
                                    propValue = 'Yes';
                                }else{
                                    propValue = 'No';
                                }
                                
                                propObj.last_login = propValue;
                            }
                            
                            if(propName === 'date_doc' || propName === 'date_pay')
                            {
                                dateFormat = 'invoiceDate';
                               if(propName === 'date_doc')
                                {
                                    propObj.date_doc = ParseDate(propValue, dateFormat);
                                }
                                else
                                {
                                    propObj.date_pay = ParseDate(propValue, dateFormat);
                                }
                            }

                            if(propName === 'sum_val' || propName === 'remaining')
                            {
                                propValue = parseFloat(propValue).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$& ');
                                
                                if(propName === 'sum_val')
                                {
                                    propObj.sum_val = propValue;
                                }
                                else
                                {
                                    propObj.remaining = propValue;
                                }
                            }
//                            console.log(propName+":"+propValue);
                            //var data_f = propValue;
                            //propObj.propName = propValue;
                            //propObj.ConsignorName = "sfsdf";
                            data.value.propID = propObj;
                            
                    });
                       
                });

            var oDataSource = {};
            // Probe data structures for V4, V3, and V2 versions of OData response
            oDataSource.aaData = data.value || (data.d && data.d.results) || data.d;
            
            var iCount = (data["@odata.count"]) ? data["@odata.count"] : ((data["odata.count"]) ? data["odata.count"] : ((data.__count) ? data.__count : (data.d && data.d.__count)));

            if (iCount == null) {
                if (oDataSource.aaData.length === oSettings._iDisplayLength) {
                    oDataSource.iTotalRecords = oSettings._iDisplayStart + oSettings._iDisplayLength + 1;
                } else {
                    oDataSource.iTotalRecords = oSettings._iDisplayStart + oDataSource.aaData.length;
                }
            } else {
                oDataSource.iTotalRecords = iCount;
            }

            oDataSource.iTotalDisplayRecords = oDataSource.iTotalRecords;
            fnCallback(oDataSource);
        }
    }));

} // end fnServerData

//
function getFullname (id) {
    var fullname;
    $.getJSON(Base_URL + "/api/fullname/get/" + id, function(data){
       fullname = data.firstname+' '+data.lastname;
    });
    
    return fullname;
}