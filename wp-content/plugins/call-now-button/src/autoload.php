<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'cnb\\admin\\action\\actionicon' => '/admin/action/partials/class-action-icon-picker.php',
                'cnb\\admin\\action\\actioniconpicker' => '/admin/action/partials/class-action-icon-picker.php',
                'cnb\\admin\\action\\actionsettingsemail' => '/admin/action/partials/class-action-settings-email.php',
                'cnb\\admin\\action\\actionsettingsfacebook' => '/admin/action/partials/class-action-settings-facebook.php',
                'cnb\\admin\\action\\actionsettingsiframe' => '/admin/action/partials/class-action-settings-iframe.php',
                'cnb\\admin\\action\\actionsettingsintercom' => '/admin/action/partials/class-action-settings-intercom.php',
                'cnb\\admin\\action\\actionsettingsline' => '/admin/action/partials/class-action-settings-line.php',
                'cnb\\admin\\action\\actionsettingslink' => '/admin/action/partials/class-action-settings-link.php',
                'cnb\\admin\\action\\actionsettingsmap' => '/admin/action/partials/class-action-settings-map.php',
                'cnb\\admin\\action\\actionsettingsskype' => '/admin/action/partials/class-action-settings-skype.php',
                'cnb\\admin\\action\\actionsettingssms' => '/admin/action/partials/class-action-settings-sms.php',
                'cnb\\admin\\action\\actionsettingstally' => '/admin/action/partials/class-action-settings-tally.php',
                'cnb\\admin\\action\\actionsettingsviber' => '/admin/action/partials/class-action-settings-viber.php',
                'cnb\\admin\\action\\actionsettingswechat' => '/admin/action/partials/class-action-settings-wechat.php',
                'cnb\\admin\\action\\actionsettingswhatsapp' => '/admin/action/partials/class-action-settings-whatsapp.php',
                'cnb\\admin\\action\\actionsettingszalo' => '/admin/action/partials/class-action-settings-zalo.php',
                'cnb\\admin\\action\\cnb_action_list_table' => '/admin/action/Cnb_Action_List_Table.php',
                'cnb\\admin\\action\\cnbaction' => '/admin/action/CnbAction.php',
                'cnb\\admin\\action\\cnbactioncontroller' => '/admin/action/CnbActionController.php',
                'cnb\\admin\\action\\cnbactionproperties' => '/admin/action/CnbAction.php',
                'cnb\\admin\\action\\cnbactionrouter' => '/admin/action/CnbActionRouter.php',
                'cnb\\admin\\action\\cnbactionschedule' => '/admin/action/CnbAction.php',
                'cnb\\admin\\action\\cnbactiontype' => '/admin/action/CnbActionType.php',
                'cnb\\admin\\action\\cnbactionview' => '/admin/action/CnbActionView.php',
                'cnb\\admin\\action\\cnbactionviewedit' => '/admin/action/CnbActionViewEdit.php',
                'cnb\\admin\\api\\cnbadmincloud' => '/admin/api/CnbAdminCloud.php',
                'cnb\\admin\\api\\cnbappremote' => '/admin/api/CnbAppRemote.php',
                'cnb\\admin\\api\\cnbappremotepayment' => '/admin/api/CnbAppRemotePayment.php',
                'cnb\\admin\\api\\cnbdeleteresult' => '/admin/api/CnbDeleteResult.php',
                'cnb\\admin\\api\\cnbget' => '/admin/api/CnbGet.php',
                'cnb\\admin\\api\\cnbmigration' => '/admin/api/CnbMigration.php',
                'cnb\\admin\\api\\remotetrace' => '/admin/api/RemoteTrace.php',
                'cnb\\admin\\api\\remotetracer' => '/admin/api/RemoteTracer.php',
                'cnb\\admin\\apikey\\cnb_apikey_list_table' => '/admin/api-key/Cnb_Apikey_List_Table.php',
                'cnb\\admin\\apikey\\cnbapikey' => '/admin/api-key/CnbApiKey.php',
                'cnb\\admin\\apikey\\cnbapikeycontroller' => '/admin/api-key/CnbApiKeyController.php',
                'cnb\\admin\\apikey\\cnbapikeyrouter' => '/admin/api-key/CnbApiKeyRouter.php',
                'cnb\\admin\\apikey\\cnbapikeyview' => '/admin/api-key/CnbApiKeyView.php',
                'cnb\\admin\\button\\button_edit_table' => '/admin/button/partials/class-button-edit-table.php',
                'cnb\\admin\\button\\button_icon_picker' => '/admin/button/partials/class-button-icon-picker.php',
                'cnb\\admin\\button\\button_label' => '/admin/button/partials/class-button-label.php',
                'cnb\\admin\\button\\cnb_button_list_table' => '/admin/button/Cnb_Button_List_Table.php',
                'cnb\\admin\\button\\cnbbutton' => '/admin/button/CnbButton.php',
                'cnb\\admin\\button\\cnbbuttoncontroller' => '/admin/button/CnbButtonController.php',
                'cnb\\admin\\button\\cnbbuttonoptions' => '/admin/button/CnbButton.php',
                'cnb\\admin\\button\\cnbbuttonrouter' => '/admin/button/CnbButtonRouter.php',
                'cnb\\admin\\button\\cnbbuttonview' => '/admin/button/CnbButtonView.php',
                'cnb\\admin\\button\\cnbbuttonviewedit' => '/admin/button/CnbButtonViewEdit.php',
                'cnb\\admin\\button\\cnbmultibuttonoptions' => '/admin/button/CnbButton.php',
                'cnb\\admin\\button\\cnbscrolloptions' => '/admin/button/CnbButton.php',
                'cnb\\admin\\cnbadminajax' => '/admin/CnbAdminAjax.php',
                'cnb\\admin\\condition\\cnb_condition_list_table' => '/admin/condition/Cnb_Condition_List_Table.php',
                'cnb\\admin\\condition\\cnbcondition' => '/admin/condition/CnbCondition.php',
                'cnb\\admin\\condition\\cnbconditioncontroller' => '/admin/condition/CnbConditionController.php',
                'cnb\\admin\\condition\\cnbconditionrouter' => '/admin/condition/CnbConditionRouter.php',
                'cnb\\admin\\condition\\cnbconditionview' => '/admin/condition/CnbConditionView.php',
                'cnb\\admin\\condition\\cnbconditionviewedit' => '/admin/condition/CnbConditionViewEdit.php',
                'cnb\\admin\\deactivation\\activation' => '/admin/deactivation/Activation.php',
                'cnb\\admin\\deactivation\\deactivation' => '/admin/deactivation/Deactivation.php',
                'cnb\\admin\\domain\\cnb_domain_list_table' => '/admin/domain/Cnb_Domain_List_Table.php',
                'cnb\\admin\\domain\\cnbdomain' => '/admin/domain/CnbDomain.php',
                'cnb\\admin\\domain\\cnbdomaincontroller' => '/admin/domain/CnbDomainController.php',
                'cnb\\admin\\domain\\cnbdomainproperties' => '/admin/domain/CnbDomain.php',
                'cnb\\admin\\domain\\cnbdomainrouter' => '/admin/domain/CnbDomainRouter.php',
                'cnb\\admin\\domain\\cnbdomainview' => '/admin/domain/CnbDomainView.php',
                'cnb\\admin\\domain\\cnbdomainviewedit' => '/admin/domain/CnbDomainViewEdit.php',
                'cnb\\admin\\domain\\cnbdomainviewupgrade' => '/admin/domain/CnbDomainViewUpgrade.php',
                'cnb\\admin\\domain\\cnbdomainviewupgradefinished' => '/admin/domain/partials/CnbDomainViewUpgradeFinished.php',
                'cnb\\admin\\domain\\cnbdomainviewupgradeinprogress' => '/admin/domain/partials/CnbDomainViewUpgradeInProgress.php',
                'cnb\\admin\\domain\\cnbdomainviewupgradeoverview' => '/admin/domain/partials/CnbDomainViewUpgradeOverview.php',
                'cnb\\admin\\gettingstarted\\gettingstartedcontroller' => '/admin/getting-started/class-getting-started-controller.php',
                'cnb\\admin\\gettingstarted\\gettingstartedrouter' => '/admin/getting-started/class-getting-started-router.php',
                'cnb\\admin\\gettingstarted\\gettingstartedview' => '/admin/getting-started/class-getting-started-view.php',
                'cnb\\admin\\legacy\\cnblegacycontroller' => '/admin/legacy/CnbLegacyController.php',
                'cnb\\admin\\legacy\\cnblegacyedit' => '/admin/legacy/CnbLegacyEdit.php',
                'cnb\\admin\\legacy\\cnblegacyupgrade' => '/admin/legacy/CnbLegacyUpgrade.php',
                'cnb\\admin\\models\\cnbactivation' => '/admin/models/CnbActivation.php',
                'cnb\\admin\\models\\cnbplan' => '/admin/models/CnbPlan.php',
                'cnb\\admin\\models\\cnbuser' => '/admin/models/CnbUser.php',
                'cnb\\admin\\models\\cnbuseraddress' => '/admin/models/CnbUser.php',
                'cnb\\admin\\models\\cnbusermarketingdata' => '/admin/models/CnbUser.php',
                'cnb\\admin\\models\\cnbuserstripedetails' => '/admin/models/CnbUser.php',
                'cnb\\admin\\models\\cnbusertaxid' => '/admin/models/CnbUser.php',
                'cnb\\admin\\models\\cnbusertaxidverification' => '/admin/models/CnbUser.php',
                'cnb\\admin\\models\\validationhooks' => '/admin/models/cloud-notice.class.php',
                'cnb\\admin\\models\\validationmessage' => '/admin/models/cloud-notice.class.php',
                'cnb\\admin\\models\\validationmessagewithid' => '/admin/models/cloud-notice.class.php',
                'cnb\\admin\\profile\\cnbprofilecontroller' => '/admin/profile/CnbProfileController.php',
                'cnb\\admin\\profile\\cnbprofileedit' => '/admin/profile/CnbProfileEdit.php',
                'cnb\\admin\\profile\\cnbprofilerouter' => '/admin/profile/CnbProfileRouter.php',
                'cnb\\admin\\settings\\cnbapikeyactivatedview' => '/admin/settings/CnbApiKeyActivatedView.php',
                'cnb\\admin\\settings\\cnbsettingscontroller' => '/admin/settings/CnbSettingsController.php',
                'cnb\\admin\\settings\\cnbsettingsrouter' => '/admin/settings/CnbSettingsRouter.php',
                'cnb\\admin\\settings\\cnbsettingsviewedit' => '/admin/settings/CnbSettingsViewEdit.php',
                'cnb\\admin\\settings\\settings_reset_view' => '/admin/settings/class-settings-reset-view.php',
                'cnb\\admin\\settings\\stripebillingportal' => '/admin/settings/StripeBillingPortal.php',
                'cnb\\cache\\cachehandler' => '/utils/class-cachehandler.php',
                'cnb\\callnowbutton' => '/CallNowButton.php',
                'cnb\\cli\\cnb_cli' => '/cli/CNB_CLI.php',
                'cnb\\cli\\cnb_cli_api' => '/cli/CNB_CLI_Api.php',
                'cnb\\cli\\cnb_cli_button' => '/cli/CNB_CLI_Button.php',
                'cnb\\cli\\cnb_cli_user' => '/cli/CNB_CLI_User.php',
                'cnb\\cnbfooter' => '/admin/partials/CnbFooter.php',
                'cnb\\cnbheader' => '/admin/partials/CnbHeader.php',
                'cnb\\cnbheadernotices' => '/admin/partials/CnbHeaderNotices.php',
                'cnb\\coupons\\cnbpromotioncode' => '/coupons/class-cnb-promotion-code.php',
                'cnb\\coupons\\cnbpromotioncoderestrictions' => '/coupons/class-cnb-promotion-code-restrictions.php',
                'cnb\\notices\\cnbadminnotices' => '/notices/CnbAdminNotices.php',
                'cnb\\notices\\cnbnotice' => '/notices/CnbNotice.php',
                'cnb\\notices\\cnbnotices' => '/notices/CnbNotices.php',
                'cnb\\renderer\\cloudrenderer' => '/renderers/cloud/class-cloudrenderer.php',
                'cnb\\renderer\\modernrenderer' => '/renderers/modern/class-modernrenderer.php',
                'cnb\\renderer\\nooprenderer' => '/renderers/noop/class-nooprenderer.php',
                'cnb\\renderer\\renderer' => '/renderers/class-renderer.php',
                'cnb\\renderer\\rendererfactory' => '/renderers/class-rendererfactory.php',
                'cnb\\utils\\cnb_sentry' => '/utils/class-cnb-sentry.php',
                'cnb\\utils\\cnbadminfunctions' => '/utils/CnbAdminFunctions.php',
                'cnb\\utils\\cnbutils' => '/utils/CnbUtils.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
