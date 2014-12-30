{*
 * CubeCart v6
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2014. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Web:   http://www.cubecart.com
 * Email:  sales@cubecart.com
 * License:  GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
 *}
<div id="upgrade" class="tab_content">
  <h3>Upgrade Required</h3>
  <p>Right now your store uses &quot;CubeCart Lite&quot; the free version of CubeCart which has restricted features and a limit of {$TRIAL_LIMITS.customers} customers or {$TRIAL_LIMITS.orders} orders (whichever comes first) and {$TRIAL_LIMITS.administrator} administrator. Below is our website showing our pricing and links to further information.</p>
  <p>Please note that the software license key can be added in the &quot;Advanced&quot; tab of your stores <a href="?_g=settings#Advanced_Settings">General Settings</a>.</p>
  <iframe src="{$TRIAL_LIMITS.url}" width="100%" height="500" style="border: 3px solid grey;"></iframe>
  <p align="right"><a href="{$TRIAL_LIMITS.url}" target="_blank">Launch in new window</a></p>
</div>