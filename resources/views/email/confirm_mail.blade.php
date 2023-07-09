<div>
    <table cellspacing="0" border="0" height="100%"
        style="background-image:url(&quot;&quot;);background-color:rgb(250,250,250);font-family:Nobile,sans-serif"
        cellpadding="0" width="100%">

        <tbody style="background-color: #dfe6e4;">
            <tr>
                <td valign="top">
                    <table cellspacing="0" border="0" align="center" cellpadding="0" width="670">

                        <tbody>
                            <tr style="background-color:#000000">
                                <th scope="col" colspan="2" width="50%"
                                    style="border-bottom:3px solid rgb(193,236,251);padding:10px;">
                                </th>
                            </tr>

                            <tr>
                                <td valign="top">
                                    <table cellspacing="0" border="0" cellpadding="0" width="670">
                                        <tbody style="background-color: #dfe6e4;">
                                            <tr>
                                                <td valign="top" width="5"></td>
                                                <td height="90" valign="top">
                                                    <table cellspacing="0" border="0" height="90" cellpadding="0"
                                                        width="670">
                                                        <tbody>
                                                            <tr>
                                                                <td height="90" valign="top">
                                                                    <table cellspacing="0" border="0" height="90"
                                                                        cellpadding="0" width="665">
                                                                        <tbody>
                                                                            <tr>

                                            

                                                                                <td align="center" valign="middle"
                                                                                    width="500"
                                                                                    style="color:rgb(0, 0, 0);font-size:35px;font-weight:bold;padding-top:10px; padding-right:20px;">
                                                                                    <b style="color:#17c0da"> JetPark</td>
                                                                                <td valign="top">

                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td valign="top" width="5"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <!-- <tr>
                                <td height="20" valign="top"></td>
                            </tr> -->

                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td valign="top">
                    <table cellspacing="0" border="0" align="center" cellpadding="0" width="670">
                        <tbody style="background-color: #dfe6e4;">
                            <tr>
                                <td valign="top" style="font-size:15px;color:rgb(43,43,43);line-height:20px;padding:10px;text-align:center;">
                                    <p>Dear {{$content_data->first_name}},
                                    <br>
                                    <strong> Your booking has confirmed!
                                    </strong> <br>
                                    <strong>Thank you for choosing <b style="color: #17c0da;">JetPark</b>.</strong> 
                                    <br>
                                    Your total cost for this parking is <b style="color: #17c0da;"> Rs {{$content_data->paid_amount}}</b>  
                                    <br>
                                    Below are your booking details,
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table cellspacing="0" border="0" align="center" cellpadding="0" width="670"
                        style="font-weight:normal">
                        <tbody style="background-color: #dfe6e4;">


                            <tr style="background-color:#000000;" height="60">
                                <th scope="col" colspan="2" width="100%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:20px;color:#ffffff;border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:center">
                                    <strong>
                                        Your Reference No is :&nbsp; <b style="color: #17c0da;">{{$content_data->booking_number}}</b> 
                                    </strong>
                                </th>
                            </tr>

                            

                            <tr style="background-color:#17c0da">
                                <th scope="col" colspan="2" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(247, 243, 243);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    <strong>CUSTOMER DETAILS</strong>
                                </th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    First Name</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->first_name}}</th>
                            </tr>
                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Sur Name</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->last_name}}</th>
                            </tr>
                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    E-mail</th>
                                <th scope="col" width="50%"
                                    style="text-transform:none;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    <a href="mailto:{{$content_data->customer_email}}"
                                        target="_blank">{{$content_data->customer_email}}</a>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Contact Number</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    <a href="tel:{{$content_data->customer_contact_no}}">
                                    {{$content_data->customer_contact_no}}</a>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Address</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);line-height:20px;border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->address}}, <br>
                                    {{$content_data->street}} {{$content_data->city}}. <br>
                                    {{$content_data->postal_code}}.</th>
                            </tr>

                            <tr style="background-color:#17c0da">
                                <th scope="col" colspan="2" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(247, 243, 243);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    <strong>BOOKING DETAILS</strong>
                                </th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Pickup Date</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->pick_date}}</th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Pickup Time</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->pick_time}}
                                </th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Departure Date</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->depature_date}}
                                </th>
                            </tr>
                            
                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Departure Time</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->depature_time}}</th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Return Flight Number</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->return_flight_number}}</th>
                            </tr>

                            <tr style="background-color:#17c0da">
                                <th scope="col" colspan="2" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(247, 243, 243);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    <strong>VEHICLE DETAILS</strong>
                                </th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Car Register Number</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->car_reg_number}}</th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Car Make</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->car_make}}</th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Car Model</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->car_model}}</th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Color</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->color}}</th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Car Wash</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->car_wash}}</th>
                            </tr>

                            <tr style="background-color:#17c0da">
                                <th scope="col" colspan="2" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(247, 243, 243);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    <strong>PAYMENT DETAILS</strong>
                                </th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Amount</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Rs {{$content_data->paid_amount}}
                                </th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Payment Method</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->payment_method}}</th>
                            </tr>
                            
                        </tbody>
                    </table>
                    <table cellspacing="0" border="0" align="center" cellpadding="0" width="670">
                        <tbody style="background-color: #dfe6e4;">
                            <tr>
                                <td valign="top" style="font-size:15px;color:rgb(43,43,43);line-height:20px;padding:10px;text-align:center"><br>


                                    <p><strong>Thanking you,</strong> <br><br>
                                        <b style="color: #17c0da;">JetPark</b> Team.<br>
                                        Email: <a href="mailto:jetparkbooking@gmail.com"
                                            target="_blank">jetparkbooking@gmail.com</a><br>
                                        Telephone: <a href="tel:+940000000000"><i class="fa fa-phone"
                                                aria-hidden="true"></i> +94 000 000 0000</a>
                                    </p>
                                </td>
                            </tr>
                            <tr style="background-color:#000000">
                                <th scope="col" colspan="2" width="50%"
                                    style="border-top:3px solid rgb(193,236,251);padding:10px;">
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

        </tbody>
    </table>
</div>