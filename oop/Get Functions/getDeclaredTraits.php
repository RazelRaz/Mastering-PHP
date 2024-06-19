<?php
// get_declared_traits()

trait traitTest {

}
trait anotherTraitTest {

}

class hjl {
    use traitTest;
}

class rtr extends hjl {

}

echo "<pre>";
print_r(get_declared_traits());
echo "</pre>";