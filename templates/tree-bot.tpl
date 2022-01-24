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
<div data-paygreen-carbon-bot="personalize"></div>

<script>
    require(['https://storage.googleapis.com/carbonbot-paygreen-recette/latest/carbon-bot.js'], function(carbonBot) {
        carbonBot.init({
            endpoint: null,
            showDemoData: true,
            bot: {
                position: "inline",
                colors: {
                    primary: "{$color}",
                },
                translations: {
                    "fr": {
                        title: {$title},
                        engagementDescription: {$description},
                    }
                },
                engagementLink: "{$detailsUrl|escape:'html':'UTF-8'}",
                shopName: "Ma boutique",
            }
        });

        window.carbonBot = carbonBot;
    });

    // To change color dynamically, use:
    // carbonBot.setColor('#12AD89')
</script>
