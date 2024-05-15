# Grav Visitorlog Plugin

`VisitorLog` is a [Grav](http://github.com/getgrav/grav) Plugin and record all visited pages and save them to a file.

# Installation

## Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `visitorlog`. You can find these files on [GitHub](https://github.com/hugoaf/grav-plugin-visitorlog) 

You should now have all the plugin files under

    /your/site/grav/user/plugins/visitorlog

>> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav), the [Error](https://github.com/getgrav/grav-plugin-error), the [Admin](https://github.com/getgrav/grav-plugin-admin) and [Data Manager](https://github.com/getgrav/grav-plugin-data-manager) plugins, and a theme to be installed in order to operate.

# Usage

`Visitorlog` runs in the background and most of the time you will not know it is there. Although as soon as a page is visited by client, the visitorlog plugin will save the visitor IP address, time and  page url to a file.

When enabled the visitorlog plugin will save data to a file:

- `/log/Ymd`

for example for today, all logs will save to:

- `log/20240514`
  

# Configuration

Simply copy the `user/plugins/visitorlog/visitorlog.yaml` into `user/config/plugins/visitorlog.yaml` and make your modifications.

`enabled: true 				    // Enable or disable plugin`


# Updating

## Manual Update

Manually updating Problems is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/plugins/visitorlog` directory.
* Downalod the new version of the Visitorlog plugin from  [GitHub](https://github.com/shaban532/grav-plugin-visitorlog).
* Unzip the zip file in `your/site/user/plugins` and rename the resulting folder to `visitorlog`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/plugins`) will remain intact.
