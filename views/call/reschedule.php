<div class="govuk-grid-row">
    <h2>Reschedule call</h2>
    <div class="govuk-grid-column-one-third">
        <label class="govuk-label" for="FirstName">Day</label>
        <div class="govuk-form-group lbh-form-group">
            <select class="govuk-select">
                <option>Date</option>
            </select>
        </div>
    </div>
    <div class="govuk-grid-column-one-third">
        <label class="govuk-label" for="LastName">Time</label>
        <div class="govuk-form-group lbh-form-group">
            <select class="govuk-select">
                <option>Hour</option>
            </select>
        </div>
    </div>
    <div class="govuk-grid-column-one-third">
        <label class="govuk-label" for="LastName">&nbsp;</label>
        <div class="govuk-form-group lbh-form-group">
            <select class="govuk-select">
                <option>Minute</option>
            </select>
        </div>
    </div>
</div>

<button id="update-btn" class="govuk-button lbh-button js-cta-btn" data-module="govuk-button" onclick="window.location = '/listcall';">
    Continue
</button>