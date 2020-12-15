<a href="/" class="govuk-back-link  lbh-back-link">Back</a>

<h1 class="lbh-heading-h1">Callback list</h1>

<h3 class="lbh-heading-h3">Filter by Help Type:</h3>

<div class="govuk-grid-row">
    <div class="govuk-grid-column-one-third">
        <select onchange="document.location = '/listcall?calltype=' + this.value" class="govuk-select">
            <option value="">Calltype</option>
            <?php
            foreach(array("Contact Tracing", "Help Request", "Shielding", "Welfare Call") as $row):
                ?>
                <option value="<?=$row?>"<?=$row==$_REQUEST['calltype']?" selected='selected'":""?>><?=$row?></option>
            <?php
            endforeach;
            ?>
        </select>
    </div>
    <div class="govuk-grid-column-one-third">
        <select onchange="document.location = '/listcall?initials=' + this.value" class="govuk-select">
            <option value="">Assigned to</option>
            <?php
            foreach(array("BD", "AR", "CK", "MW") as $row):
                ?>
                    <option value="<?=$row?>"<?=$row==$_REQUEST['initials']?" selected='selected'":""?>><?=$row?></option>
                <?php
            endforeach;
            ?>
        </select>
    </div>
</div>

<p class="lbh-body-m">Displaying 2 record(s)</p>

<span hidden="true"></span>
<table class="govuk-table  lbh-table">
    <thead class="govuk-table__head">
        <tr class="govuk-table__row">
            <th scope="col" class="govuk-table__header">Name</th>
            <th scope="col" class="govuk-table__header">Address</th>
            <th scope="col" class="govuk-table__header">Requested Date</th>
            <th scope="col" class="govuk-table__header">Type</th>
            <th scope="col" class="govuk-table__header">Unsuccessful call attempts</th>
            <th scope="col" class="govuk-table__header">Follow-up required</th>
            <th scope="col" class="govuk-table__header">Assigned to</th>
            <th scope="col" class="govuk-table__header">Rescheduled at</th>
            <th scope="col" class="govuk-table__header"></th>
        </tr>
    </thead>
    <tbody class="govuk-table__body">
        <tr class="govuk-table__row">
            <td class="govuk-table__cell">
                Name
            </td>
            <td class="govuk-table__cell">
                Flat 4, Caliban
            </td>
            <td class="govuk-table__cell">2020/01/01</td>
            <td class="govuk-table__cell"><?=$_REQUEST['calltype']?:'Contact Tracing'?></td>


            <td class="govuk-table__cell ">10</td>
            <td class="govuk-table__cell">Y</td>
            <td class="govuk-table__cell"><a href="/singleassign"><?=$_REQUEST['initials']?:'BD'?></a></td>
            <td class="govuk-table__cell"></td>
            <td class="govuk-table__cell">
                <a data-testid="view-button" href="/oneresident?id=18" class="js-cta-btn" id="view-resident-18">View</a>
            </td>
        </tr>

        <tr class="govuk-table__row">
            <td class="govuk-table__cell">
                Name
            </td>
            <td class="govuk-table__cell">
                Flat 4, Caliban
            </td>
            <td class="govuk-table__cell">2020/01/01</td>
            <td class="govuk-table__cell"><?=$_REQUEST['calltype']?:'Contact Tracing'?></td>
            <td class="govuk-table__cell ">10</td>
            <td class="govuk-table__cell">Y</td>
            <td class="govuk-table__cell"><a href="/singleassign"><?=$_REQUEST['initials']?:'BD'?></a></td>
            <td class="govuk-table__cell">2020/12/15 12:30</td>
            <td class="govuk-table__cell">
                <a data-testid="view-button" href="/oneresident?id=18" class="js-cta-btn" id="view-resident-18">View</a>
            </td>
        </tr>
    </tbody>
</table>