<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * ExtensionBase class
 *
 * @author Raúl Fraile Beneyto <raulfraile@gmail.com> || @raulfraile
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Extension\Type;




class UnixPermissionsType extends BaseType
{

    const TYPE_ID = 'unix_permissions';

    public function getFormattedValue()
    {
        return decoct($this->data);
    }
}
