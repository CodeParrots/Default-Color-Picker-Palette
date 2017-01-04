# Default Color Picker Palette - v1.0.0

Set the default color picker palette across all instances of the WordPress iris color picker.

**Note:** *There are no options for this plugin. See below for instructions on how to set the default color palette.*

### How To

Open `default-color-picker-palette.php` and update the colors inside of the colors array.

Example:

```php
$colors = (array) apply_filters( 'codeparrots_dcp_palette', [
	'#000000',
	'#FF0000',
	'#800000',
	'#FFFF00',
	'#1C566A',
	'#DAF7A6',
] );
```

### Example

##### Before
<img src="https://cldup.com/OWdvUQasW7.png" width="75%" />

##### After
<img src="https://cldup.com/2e0pKUBHTc.png" width="75%" />
