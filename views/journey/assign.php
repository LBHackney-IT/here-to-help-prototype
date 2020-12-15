<a href="/" class="govuk-back-link  lbh-back-link">Back</a>

<h1 class="lbh-heading-h1">Reassign call to initials</h1>


<form action="/listcall" method="post">
    <h3>Initials of new assignee</h3>

    <label class="govuk-label" for="EmailAddress">Initials</label>
    <div class="govuk-form-group lbh-form-group">
        <input class="govuk-input  lbh-input" id="EmailAddress" name="initials" type="text">
    </div>

    <div class="govuk-grid-row" id="btn-bottom-panel">
        <div class="govuk-grid-column-one-half">
            <a href="/listcall" class="govuk-button lbh-button govuk-button--secondary lbh-button--secondary">Cancel</a>

            <button class="govuk-button lbh-button js-cta-btn" data-module="govuk-button">
                Assign
            </button>
        </div>
    </div>
</form>