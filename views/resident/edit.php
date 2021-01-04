<h1 class="lbh-heading-h1">Update resident profile</h1>
<br />


<form action="/help-requests/create" method="post">

    <div class="govuk-grid-row">
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="FirstName">First name</label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="FirstName" name="FirstName" type="text" value="John">
            </div>
            <br />
        </div>
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="LastName">Last name</label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="LastName" name="LastName" type="text"  value="Doe">
            </div>
        </div>
    </div>

    <div class="govuk-grid-row">
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="ContactTelephoneNumber">Contact telephone<br /></label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="ContactTelephoneNumber" name="ContactTelephoneNumber" type="tel">
            </div>
        </div>
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="ContactMobileNumber">Contact mobile (Optional)</label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="ContactMobileNumber" name="ContactMobileNumber" type="tel">
            </div>
        </div>
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="EmailAddress">Email address (Optional)</label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="EmailAddress" name="EmailAddress" type="text">
            </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="DOB">Date of birth (YYYY-MM-DD)</label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="DOB" name="DOB" type="text" value="1995-06-07" placeholder="Eg. 1965-01-04">
            </div>
        </div>
    </div>
    <br />


    <hr>
    <br />
    <input type="hidden" name="building_number" id="building_number" value="">
    <input type="hidden" name="uprn" id="uprn" value="">
    <input type="hidden" name="ward" id="ward" value="">
    <input type="hidden" name="gazetteer" id="gazetteer" value="">
    <div class="govuk-grid-row">
        <div class="govuk-grid-column-one-half">
            <h3 class="lbh-heading-h3">Search address by postcode</h3>
            <br />













            <div class="govuk-form-group lbh-form-group">



                <input class="govuk-input govuk-input--width-10 lbh-input" id="lookup_postcode" name="lookup_postcode" type="text">
            </div>













            <button type="button" class="govuk-button  lbh-button" data-module="govuk-button" id="address-finder" data-api-url="http://localhost:8080/addresses" data-api-key="" data-api-token="">
                Search
            </button>



        </div>
        <div class="govuk-grid-column-one-half">
            <h3 class="lbh-heading-h3">Selected address</h3>
            <br />












            <div class="govuk-form-group lbh-form-group">



                <input class="govuk-input  lbh-input" id="address_first_line" name="address_first_line" type="text" readonly="readonly">
            </div>















            <div class="govuk-form-group lbh-form-group">



                <input class="govuk-input  lbh-input" id="address_second_line" name="address_second_line" type="text" readonly="readonly">
            </div>















            <div class="govuk-form-group lbh-form-group">



                <input class="govuk-input  lbh-input" id="address_third_line" name="address_third_line" type="text" readonly="readonly">
            </div>















            <div class="govuk-form-group lbh-form-group">



                <input class="govuk-input  lbh-input" id="postcode" name="postcode" type="text" readonly="readonly">
            </div>



        </div>
    </div>
    <br />
    <hr>

















    <div class="govuk-form-group lbh-form-group">

        <fieldset class="govuk-fieldset" aria-describedby="consent_to_share-hint">

            <legend class="govuk-fieldset__legend">

                Can we share the information you’ve provided with voluntary or community organisations?

            </legend>


            <span id="consent_to_share-hint" class="govuk-hint  lbh-hint">
For example, sharing your contact details with a charity so they can call you to offer support.
</span>


            <div class="govuk-radios govuk-radios--inline lbh-radios">





                <div class="govuk-radios__item">
                    <input class="govuk-radios__input" id="consent_to_share" name="consent_to_share" type="radio" value="yes">
                    <label class="govuk-label govuk-radios__label" for="consent_to_share">
                        Yes
                    </label>

                </div>







                <div class="govuk-radios__item">
                    <input class="govuk-radios__input" id="consent_to_share-2" name="consent_to_share" type="radio" value="no">
                    <label class="govuk-label govuk-radios__label" for="consent_to_share-2">
                        No
                    </label>

                </div>




            </div>
        </fieldset>


    </div>

    <hr />
    <br />

    <h3>Alternate contact:</h3>
    <br />

    <div class="govuk-grid-row">
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="FirstName">First name</label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="FirstName" name="FirstName" type="text">
            </div>
        </div>
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="LastName">Last name</label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="LastName" name="LastName" type="text">
            </div>
        </div>
    </div>
    <br />

    <div class="govuk-grid-row">
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="ContactTelephoneNumber">Contact telephone<br /></label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="ContactTelephoneNumber" name="ContactTelephoneNumber" type="tel">
            </div>
        </div>
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="ContactMobileNumber">Contact mobile (Optional)</label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="ContactMobileNumber" name="ContactMobileNumber" type="tel">
            </div>
        </div>
        <div class="govuk-grid-column-one-third">
            <label class="govuk-label" for="EmailAddress">Email address (Optional)</label>
            <div class="govuk-form-group lbh-form-group">
                <input class="govuk-input  lbh-input" id="EmailAddress" name="EmailAddress" type="text">
            </div>
        </div>
    </div>
    <br />

    <hr>
    <br />

    <h3>Key notes</h3>
    <br />
    <textarea class="govuk-textarea  lbh-textarea" id="NewCaseNote" name="NewCaseNote" rows="2" aria-describedby="NewCaseNote-hint" spellcheck="false"></textarea>

    <div class="govuk-grid-row" id="btn-bottom-panel">
        <div class="govuk-grid-column-one-half">
            <a href="/help-requests" class="govuk-button lbh-button govuk-button--secondary lbh-button--secondary">Cancel</a>

            <button class="govuk-button lbh-button js-cta-btn" data-module="govuk-button">
                Next
            </button>
        </div>
    </div>
    <a name="down"></a>
</form>