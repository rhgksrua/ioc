# IOC container

* This container is based on tutplus tutorial.

### Register

```
Ioc::register('dummy', function() {
    $dummy = new Dummy;
    $dummy->someMethod();
    $dummy->anotherMethod();

    return $dummy;
});
```

### Resolve

```
$dummy = Ioc::resolve('dummy');
```


#### TODO

* Add ```Ioc::deregister```
