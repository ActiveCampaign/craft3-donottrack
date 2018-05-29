<?php
/**
 * Do Not Track plugin for Craft CMS 3.x
 *
 * Helpers for respecting Do Not Track headers sent by browsers.
 *
 * @link      https://wildbit.com
 * @copyright Copyright (c) 2018 Wildbit
 */

namespace wildbit\donottrack;

use wildbit\donottrack\services\DoNotTrackService as DoNotTrackServiceService;
use wildbit\donottrack\variables\DoNotTrackVariable;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 * Class DoNotTrack
 *
 * @author    Wildbit
 * @package   DoNotTrack
 * @since     1.0.0
 *
 * @property  DoNotTrackServiceService $doNotTrackService
 */
class DoNotTrack extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var DoNotTrack
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('doNotTrack', DoNotTrackVariable::class);
            }
        );

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'do-not-track',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
