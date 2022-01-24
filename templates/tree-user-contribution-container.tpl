{*
 * 2014 - 2022 Watt Is It
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License X11
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/mit-license.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@paygreen.fr so we can send you a copy immediately.
 *
 * @author    PayGreen <contact@paygreen.fr>
 * @copyright 2014 - 2022 Watt Is It
 * @license   https://opensource.org/licenses/mit-license.php MIT License X11
 * @version   1.0.0
 *
 *}
<div id="pgtreecontribution-container">
    <div id="pgtreecontribution-block">
        <h3 id="pgtreecontribution-custom-title">
            {'usercontribution.title'|pgtrans}
        </h3>
        {if $isTreeTestModeActivated}
            <div class="pgdiv__mbottom-sm">
                <span class="pgbadge">
                    {'misc.tree_user_contribution.test_mode.title'|pgtrans}
                </span>
            </div>
        {/if}
        <div class="pgtreecontribution-choice">
            <span class="pgtreecontribution-contribution pgtreecontribution-contribution--{if $hasContribution}yes{else}no{/if}"></span>
            <p class="pgtreecontribution-custom-message">
                {'usercontribution.message1'|pgtrans}
                <span class="pgcharity-contribution-amount"> {$estimatedPrice}€ </span>
                {'usercontribution.message2'|pgtrans} {$favoriteProject}
            </p>
        </div>
        {if $carbonBotActivated}
            <div class="pgtreecontribution-carbonbot">
                <div class="pgtreecontribution-carbonbot-leaf pgtreecontribution-carbonbot-leaf-carbonBotActivated"></div>
                <span>{'usercontribution.carbonbot'|pgtrans}</span>
            </div>
        {/if}
    </div>
    <div class="pgtreecontribution-carbon-container">
        <div class="pgtreecontribution-carbon {if $carbonBotActivated}pgtreecontribution-carbon-carbonBotActivated{/if}">
            <div class="pgtreecontribution-carbon-title">{'usercontribution.carbonfootprint'|pgtrans}</div>
            <div class="pgtreecontribution-carbon-footprint {if $carbonBotActivated}pgtreecontribution-carbon-footprint-carbonBotActivated{/if}">{$estimatedCarbon}</div>
        </div>
        <a class="pgtreecontribution-link {if $carbonBotActivated}pgtreecontribution-link-carbonBotActivated{/if}" href="https://www.ademe.fr/" target="_blank">{'usercontribution.source'|pgtrans}</a>
    </div>
</div>
<div class="pgtreecontribution-popin-container pgHidden"></div>
