# Do Not Track plugin for Craft CMS 3.x

Helpers for respecting Do Not Track headers sent by browsers.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require wildbit/craft3-donottrack

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Do Not Track.

## Using Do Not Track

You can use the `doNotTrack.isEnabled` variable to check whether DNT is enabled in the user’s browser from your twig templates.

```twig
{% if craft.doNotTrack.isEnabled %}
  Do Not Track is enabled.
{% endif %}
```

Brought to you by [Wildbit](https://wildbit.com)
