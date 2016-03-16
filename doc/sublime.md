# Set-up with Sublime Text 3

## OSX

### First Step

Download the [URL handler for Sublime Text 3](https://github.com/dhoulb/subl/releases/download/v1.2/Subl.app.zip) from https://github.com/dhoulb/subl and unzip it your **/Applications** directory.
Start this App one time for register the URL handler on your MAC.
You can get more informations about this step here : https://github.com/dhoulb/subl

### Second Step (only for Google Chrome browser)

If your favourite browser is Chrome, you should follow this step :

1. Close Chrome
2. Open this file : `~/Library/Application Support/Google/Chrome/Local State` and search for `excluded_schemes` in `protocol_handler`
3. Add `"subl": false,`
4. Open Chrome and it's work !


So now your browser is available to open a subl URL like : `subl://open?url=file:///path/to/file.php&line=12&column=4`



