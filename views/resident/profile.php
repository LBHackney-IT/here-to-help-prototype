<div style="padding: 20px;">
    <div class="govuk-tabs" data-module="govuk-tabs">
      <h2 class="govuk-tabs__title">
        Contents
      </h2>
      <ul class="govuk-tabs__list">
        <li class="govuk-tabs__list-item<?=$_REQUEST['received']=='true'?"":" govuk-tabs__list-item--selected"?>">
          <a class="govuk-tabs__tab" href="#past-day">
            Support Requested
          </a>
        </li>
        <li class="govuk-tabs__list-item<?=$_REQUEST['received']=='true'?" govuk-tabs__list-item--selected":""?>">
          <a class="govuk-tabs__tab" href="#past-week">
            Support Received
          </a>
        </li>
      </ul>
      <div class="govuk-tabs__panel<?=$_REQUEST['received']!='true'?"":" govuk-tabs__panel--hidden"?>" id="past-day">
        <table class="govuk-table lbh-table">
                <thead class="govuk-table_header">
                    <tr class="govuk-table__row">
                        <th class="govuk-table__header">Type</th>
                        <th class="govuk-table__header">Action required</th>
                        <th class="govuk-table__header"></th>
                    </tr>
                </thead>

                <tbody class="govuk-table__body">
                <?php
                    if($_REQUEST["empty"]!="true"):
                ?>
                    <tr class="govuk-table__row">
                        <td scope="row" class="govuk-table__cell">Contact tracing</td>
                        <td class="govuk-table__cell">Call rescheduled</td>
                        <td class="govuk-table__cell govuk-table__cell--numeric">
                            <a href="/onecall">View</a>
                        </td>
                    </tr>

                    <tr class="govuk-table__row">
                        <td scope="row" class="govuk-table__cell">Shielding</td>
                        <td class="govuk-table__cell">Follow-up</td>
                        <td class="govuk-table__cell govuk-table__cell--numeric">
                            <a href="/onecall">View</a>
                        </td>
                    </tr>

                    <tr class="govuk-table__row">
                        <td scope="row" class="govuk-table__cell">Help Requested</td>
                        <td class="govuk-table__cell">Call</td>
                        <td class="govuk-table__cell govuk-table__cell--numeric">
                            <a href="/onecall">View</a>
                        </td>
                    </tr>
                    <?php
                        endif;
                    ?>
                </tbody>
            </table>

      </div>
      <div class="govuk-tabs__panel<?=$_REQUEST['received']=='true'?"":" govuk-tabs__panel--hidden"?>" id="past-week">
        <table class="govuk-table">
          <thead class="govuk-table__head">
            <tr class="govuk-table__row">
              <th scope="col" class="govuk-table__header">Type</th>
              <th scope="col" class="govuk-table__header">Activity</th>
              <th scope="col" class="govuk-table__header"></th>
            </tr>
          </thead>
          <tbody class="govuk-table__body">
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">Contact Tracing</td>
              <td class="govuk-table__cell">5</td>
              <td class="govuk-table__cell"><a href="/oneresident?received=true">View</a></td>
            </tr>
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">CEV</td>
              <td class="govuk-table__cell">2</td>
              <td class="govuk-table__cell"><a href="/oneresident?received=true">View</a></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>


    <p>
        <a href="/editcall?new=true" class="govuk-link">+ Add new support</a>
    </p>
</div>