@extends('front-end.master')
@section('title')
    Contacts
    @endsection
@section('body')
    <div id="content" class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h3>Contact us</h3>
                    <div class="map"><iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe></div>
                </div>
            </div>
        </div>
        <div class="border-1">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <h3>Address</h3>
                        <address class="address">
                            <p><strong  class="text-info">8901 Marmora Road,<br>
                                    Glasgow, D04 89GR.</strong>
                                <span>Freephone:</span> +1 800 559 6580<br>
                                <span>Telephone:</span> +1 800 603 6035<br>
                                <span>FAX:</span> +1 800 889 9898<br>
                                E-mail: <a href="#" >mail@demolink.org</a></p>
                            <strong  class="text-info">9863 - 9867 Mill Road, <br>
                                Cambridge, MG09 99HT.</strong>
                            <span>Freephone:</span> +1 800 559 6580<br>
                            <span>Telephone:</span> +1 800 603 6035<br>
                            <span>FAX:</span> +1 800 889 9898<br>
                            E-mail: <a href="#" >mail@demolink.org</a>
                        </address>
                    </div>
                    <div class="span8">
                        <h3>Contact Form</h3>
                        <form id="contact-form" class="contact-form">
                            <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
                            <fieldset>
                                <div class="coll-1">
                                    <label class="name">
                                        <input type="text" value="Name*:"><br>
                                        <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                                </div>
                                <div class="coll-2">
                                    <label class="email">
                                        <input type="email" value="Email*:"><br>
                                        <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                                </div>
                                <div class="coll-3">
                                    <label class="phone notRequired">
                                        <input type="tel" value="Phone:"><br>
                                        <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                                </div>
                                <div class="clear"></div>
                                <div>
                                    <label class="message">
                                        <textarea>Message*:</textarea><br>
                                        <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                                </div>
                                <div class="clear"></div>
                                <div class="buttons-wrapper"><a class="link" data-type="submit">Submit</a><span>*required fields</span></div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection