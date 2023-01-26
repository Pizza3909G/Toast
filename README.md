<h2 align="center"><b>Toast</b></h2>
<div align="center"><b>Toast system virion</b></div><br>
<div align="center">Description</div>
<div align="center">A pocketmine virion that supports plugins to make a Toast system</div>
<hr>

### Usage
Import `Toast` classes.
```php
use nayukikuu\Toast;
```

### Create a Toast instance
```php
$this->toast = new Toast($this);
```
`$plugin` contains an instance of your PluginBase

### Method send

- Send in person
```php
$this->toast->sendToast($player, "Title", "Subtitle");
```

- Multi-person send
```php
$this->toast->broadcastToast("Title", "Subtitle");
```

### Advice
- If you find a bug you can report it in: https://github.com/Pizza3909G/Toast/issues
