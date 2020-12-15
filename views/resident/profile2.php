<div style="border: 2px solid #ccc; padding: 20px;">
    <h2>Support requests</h2>
    <div class="govuk-tabs" data-module="govuk-tabs">
      <h2 class="govuk-tabs__title">
        Contents
      </h2>
      <ul class="govuk-tabs__list">
        <li class="govuk-tabs__list-item govuk-tabs__list-item--selected">
          <a class="govuk-tabs__tab" href="#past-day">
            Past day
          </a>
        </li>
        <li class="govuk-tabs__list-item">
          <a class="govuk-tabs__tab" href="#past-week">
            Past week
          </a>
        </li>
        <li class="govuk-tabs__list-item">
          <a class="govuk-tabs__tab" href="#past-month">
            Past month
          </a>
        </li>
        <li class="govuk-tabs__list-item">
          <a class="govuk-tabs__tab" href="#past-year">
            Past year
          </a>
        </li>
      </ul>
      <div class="govuk-tabs__panel" id="past-day">
        <h2 class="govuk-heading-l">Past day</h2>
        <table class="govuk-table">
          <thead class="govuk-table__head">
            <tr class="govuk-table__row">
              <th scope="col" class="govuk-table__header">Case manager</th>
              <th scope="col" class="govuk-table__header">Cases opened</th>
              <th scope="col" class="govuk-table__header">Cases closed</th>
            </tr>
          </thead>
          <tbody class="govuk-table__body">
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">David Francis</td>
              <td class="govuk-table__cell">3</td>
              <td class="govuk-table__cell">0</td>
            </tr>
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">Paul Farmer</td>
              <td class="govuk-table__cell">1</td>
              <td class="govuk-table__cell">0</td>
            </tr>
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">Rita Patel</td>
              <td class="govuk-table__cell">2</td>
              <td class="govuk-table__cell">0</td>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="govuk-tabs__panel govuk-tabs__panel--hidden" id="past-week">
        <h2 class="govuk-heading-l">Past week</h2>
        <table class="govuk-table">
          <thead class="govuk-table__head">
            <tr class="govuk-table__row">
              <th scope="col" class="govuk-table__header">Case manager</th>
              <th scope="col" class="govuk-table__header">Cases opened</th>
              <th scope="col" class="govuk-table__header">Cases closed</th>
            </tr>
          </thead>
          <tbody class="govuk-table__body">
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">David Francis</td>
              <td class="govuk-table__cell">24</td>
              <td class="govuk-table__cell">18</td>
            </tr>
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">Paul Farmer</td>
              <td class="govuk-table__cell">16</td>
              <td class="govuk-table__cell">20</td>
            </tr>
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">Rita Patel</td>
              <td class="govuk-table__cell">24</td>
              <td class="govuk-table__cell">27</td>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="govuk-tabs__panel govuk-tabs__panel--hidden" id="past-month">
        <h2 class="govuk-heading-l">Past month</h2>
        <table class="govuk-table">
          <thead class="govuk-table__head">
            <tr class="govuk-table__row">
              <th scope="col" class="govuk-table__header">Case manager</th>
              <th scope="col" class="govuk-table__header">Cases opened</th>
              <th scope="col" class="govuk-table__header">Cases closed</th>
            </tr>
          </thead>
          <tbody class="govuk-table__body">
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">David Francis</td>
              <td class="govuk-table__cell">98</td>
              <td class="govuk-table__cell">95</td>
            </tr>
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">Paul Farmer</td>
              <td class="govuk-table__cell">122</td>
              <td class="govuk-table__cell">131</td>
            </tr>
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">Rita Patel</td>
              <td class="govuk-table__cell">126</td>
              <td class="govuk-table__cell">142</td>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="govuk-tabs__panel govuk-tabs__panel--hidden" id="past-year">
        <h2 class="govuk-heading-l">Past year</h2>
        <table class="govuk-table">
          <thead class="govuk-table__head">
            <tr class="govuk-table__row">
              <th scope="col" class="govuk-table__header">Case manager</th>
              <th scope="col" class="govuk-table__header">Cases opened</th>
              <th scope="col" class="govuk-table__header">Cases closed</th>
            </tr>
          </thead>
          <tbody class="govuk-table__body">
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">David Francis</td>
              <td class="govuk-table__cell">1380</td>
              <td class="govuk-table__cell">1472</td>
            </tr>
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">Paul Farmer</td>
              <td class="govuk-table__cell">1129</td>
              <td class="govuk-table__cell">1083</td>
            </tr>
            <tr class="govuk-table__row">
              <td class="govuk-table__cell">Rita Patel</td>
              <td class="govuk-table__cell">1539</td>
              <td class="govuk-table__cell">1265</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
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

    <p>
        <a href="/editcall?new=true" class="govuk-link">+ Add new support</a>
    </p>
</div>