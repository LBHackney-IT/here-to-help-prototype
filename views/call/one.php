<a href="#" onclick="window.history.go(-1); return false;" class="govuk-back-link  lbh-back-link">Back</a>

<h2>Start a conversation</h2>

<fieldset class="govuk-fieldset">
    <legend class="govuk-fieldset__legend">What would the resident like to do?</legend>

    <div class="govuk-radios govuk-radios--inline lbh-radios">
        <div class="govuk-radios__item">
            <input class="govuk-radios__input" id="HelpNeeded" name="HelpNeeded" type="radio" value="Start conversation">
            <label class="govuk-label govuk-radios__label" for="HelpNeeded">
                Start conversation
            </label>
        </div>

        <div class="govuk-radios__item">
            <input class="govuk-radios__input" id="HelpNeeded-2" name="HelpNeeded" type="radio" value="Reschedule call">
            <label class="govuk-label govuk-radios__label" for="HelpNeeded-2">
                Reschedule call
            </label>
        </div>

        <div class="govuk-radios__item">
            <input class="govuk-radios__input" id="HelpNeeded-3" name="HelpNeeded" type="radio" value="Unwilling to engage">
            <label class="govuk-label govuk-radios__label" for="HelpNeeded-3">
                Unwilling to engage
            </label>
        </div>
    </div>
</fieldset>

<button id="update-btn" class="govuk-button lbh-button js-cta-btn" data-module="govuk-button" onclick="if(document.getElementsByName('HelpNeeded')[0].checked==true) {window.location = '/editcall';} else if(document.getElementsByName('HelpNeeded')[1].checked==true) {window.location = '/reschedule';} else {alert('We dont know what to do');}">
    Continue
</button>