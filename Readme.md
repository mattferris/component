Component
=========

```
composer require mattferris/component
```

Defines a standard interface for application components. It is used primarily by
[mattferris/application](https://github.com/mattferris/application) to define
application components for bootloading.

```php

namespace My\Namespace;

use MattFerris\ComponentInterface;

class MyComponent implements ComponentInterface
{
    /**
     * Perform any component intialization tasks
     */
    public function init()
    {
        // ...
    }

    /**
     * Load the component
     */
    public function load()
    {
        // ...
    }
}
```

Components may define constructors to gather any hard dependencies. `init()`
should prepare component resources, while `load()` should complete any final
tasks to make the component live.
