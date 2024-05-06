<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 10px;
        }
        .conteiner {
            position: relative;
        }
        .add-on {
            /* border: 1px solid; */
            width: 250px;
            height: 1024px;
            position: absolute;
            left: 460px;
        }
        .main-content {
            border: 0.5px solid;
            padding: 2px;
            position: absolute;
            width: 450px;
            height: 1024px;
        }
        .title-header {
            position: relative;
            /* text-align: center; */
            /* line-height: 0.6; */
            /* margin: 0; */
            /* padding: 0; */
            border: 1px solid;
            height: 70px;
        }
        .title-header > p {
            text-align: center;
            line-height: 0.6;
            /* margin: 0; */
            /* padding: 0; */
            /* border: 1px solid; */
        }
        table,td,th {
            border: 1px solid;
        }

        td,th {
            margin: 0;
            white-space:initial;
            border-top-width: 0px;           
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        tr {
            line-height: 1.2;
            margin-bottom: 1px;
        }
        p{
            line-height: 0.6;
        }
        .sub-content::after {
            content: "";
            display: table;
            clear: both;
        }
        .column {
            float: left;
        }
        .right-side{
            text-align: right;
            width: 50%;
        }
        .left-side {
            width: 50%;
        }
        .table-action {
            position: relative;
            top: 119px;
        }
        .document-subject {
            position: relative;
            top: 125px;
            padding: 0;
            margin: 1px;
        }

        .subject-content {
            border: 1px solid;
            padding: 5px;
            padding-bottom: 10px;
        }
        .document-references {
            position: relative;
            top: 130px;
        }
        .reference-content {
            border: 1px solid;
            /* padding: 5px; */
            padding-bottom: 10px;  
        }
        .reference-content ul li {
            font-size: 8px;
            margin: 0;
            text-align: left;
        }
        .document-addition {
            position: relative;
            top: 130px;
        }
        .addition-content {
            border: 1px solid;
            padding: 5px;
            padding-bottom: 30px;  
        }
        .document-note {
            position: relative;
            top: 135px;            
        }
        .note-content {
            border: 1px solid;
            padding: 5px;
            height: 449px;
        }

        .table-action > table td {
            /* text-align: left !important; */
            font-size: 8px !important;
            vertical-align: center;
        }
        /* .table-action > table td:first-child {
            text-align: center !important;
            font-size: 10px !important;
        } */
        .table-action > table tr {
            height: 440px;
        }
    </style>
    <title>Disposition</title>
</head>
<body>
    <div class="container">
    <div class="add-on">
        <div class="table-action">
            <table>
                <tr>
                    <td style="width:30%">Type of Action</td>
                    <td style="width:70%">Description</td>
                </tr>
                <tr>
                    <td><span style="font-family: firefly, DejaVu Sans, sans-serif;font-size:14px;">&#9744;</span> Reply to C</td>
                    <td>Give comment, approval, NOO, etc to the contractor</td>
                </tr>
                <tr>
                    <td><span style="font-family: firefly, DejaVu Sans, sans-serif;font-size:14px;">&#9744;</span> Reply to E</td>
                    <td>Respond, comment and/or receomend to the Employer</td>
                </tr>
                <tr>
                    <td><span style="font-family: firefly, DejaVu Sans, sans-serif;font-size:14px;">&#9744;</span> Infom to C</td>
                    <td>Give information to the contractor</td>
                </tr>
                <tr>
                    <td><span style="font-family: firefly, DejaVu Sans, sans-serif;font-size:14px;">&#9744;</span> Inform to E</td>
                    <td>Forward information to the Employer</td>
                </tr>
                <tr>
                    <td><span style="font-family: firefly, DejaVu Sans, sans-serif;font-size:14px;">&#9744;</span> No ned reply</td>
                    <td>No response is required</td>
                </tr>
            </table>
        </div>
        <div class="document-subject">
            <p>Subject:</p>
            <div class="subject-content">
                {{$letter->subject ?? ''}}               
            </div>
        </div>
        @if (count($letter->referencesDoc) > 0)
        <div class="document-references">
            <p>Reference(s):</p>
            <div class="reference-content">                
                @if ($letter->referencesDoc)
                <ul>
                    @foreach ($letter->referencesDoc as $ref)
                      <li>{{$ref->reference_number}}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>            
        @endif
        <div class="document-addition">
            <p>Addition:</p>
            <div class="addition-content">                
                
            </div>
        </div>
        <div class="document-note">
            <p>Note:</p>
            <div class="note-content">                
                
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="title-header">
            <p>PHASE 1-2 INCOMING LETTER</p>
            <p>PACKAGE 6: CONTAINER TERMINAL NO. 2 CONSTRUCTION</p>
            <p>Patim<strong style="color: red !important;">O</strong>ne Consul</p>
        </div>
        <div class="sub-content">
            <div class="column left-side">
                <p>Date of Letter :{{date('d F y')}}</p>
                <p>Date of Receive :{{date('d F y')}} 
                    @if ($letter->received_by)
                        > by {{$letter->received_by ?? ''}}</p>                        
                    @endif
            </div>
            <div class="column right-side">
                <h2><strong>{{$letter->letter_ref_no ?? ''}}</strong></h2>
            </div>              
        </div>
        <div class="table-content">
            <table>
                <thead>
                    <tr>
                        <th style="width: 160px;">Assignment</th>
                        <th style="width: 100px;">Name</th>
                        <th style="width: 30px;">initial</th>
                        <th style="width: 25px;">action</th>
                        <th style="width: 25px;">ref.</th>
                        <th colspan="2">sign</th>
                    </tr>                    
                </thead>
                <tbody>
                    @foreach ($engineers as $engineer)
                        <tr>
                            <td>{{$engineer->position_name}}</td>
                            <td>{{$engineer->full_name}}</td>
                            <td style="text-align: center">{{$engineer->initial}}</td>
                            <td style="text-align: center">
                                @foreach ($letter->assignments as $assignment)
                                @if ($engineer->id == $assignment->engineer_id && $assignment->action =='1')
                                    {{$assignment->priority}}
                                @endif       
                                @endforeach                               
                            </td>
                            <td style="text-align: center">
                                @foreach ($letter->assignments as $ref)
                                    @if ($engineer->id == $ref->engineer_id && ($ref->action == '1' || $ref->action == '2'))
                                        <span style="font-family: firefly, DejaVu Sans, sans-serif;font-size:14px;">&#10004;</span>
                                    @endif 
                                @endforeach
                            </td>                          
                            <td></td>
                            <td></td>
                        </tr> 
                        @endforeach                       
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>