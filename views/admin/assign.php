<a href="#" onclick="window.history.go(-1); return false;" class="govuk-back-link  lbh-back-link">Back</a>

<h1 class="lbh-heading-h1">Assign calls to initials</h1>


<form action="/" method="post">
    <h3>Add initials to assign calls to</h3>
    <textarea class="govuk-textarea  lbh-textarea" id="NewCaseNote" name="NewCaseNote" rows="5" aria-describedby="NewCaseNote-hint" spellcheck="false"></textarea>

    <p class="govuk-body">Please write the initials of the people who will be handling calls today. When you click Assign, all current calls in the callback list will be reassigned to the initials you have specified. Separate the initials by commas.</p>

    <div class="govuk-grid-row" id="btn-bottom-panel">
        <div class="govuk-grid-column-one-half">
            <a href="/" class="govuk-button lbh-button govuk-button--secondary lbh-button--secondary">Cancel</a>

            <button class="govuk-button lbh-button js-cta-btn" data-module="govuk-button">
                Assign
            </button>
        </div>
    </div>
</form>