<?php
/**
 * Standard object class in which all non-static classes should be
 * a subclass of (derived from). Provides base methods and modeled after
 * after Microsoft's C# and Java's object class.
 *
 * @link        https://github.com/amcgowanca/PHP-Object-Class
 * @copyright   Copyright (c) 2013 McGowan Corp. (http://www.mcgowancorp.com)
 * @license     http://opensource.org/licenses/BSD-3-Clause BSD 3-Clause
 * @author      Aaron McGowan <aaron.mcgowan@mcgowancorp.com>
 */
class Object
{
    /**
     * Returns a string representation of this class instance.
     *
     * This method should not be called directly, instead, PHP will invoke this
     * magic method automatically when an instance of this class is used as a string.
     * Instead, call the toString method.
     *
     * @access public
     * @return string Returns a string representation of this object.
     * @uses Object::toString
     */
    final public function __toString()
    {
        return $this->toString();
    }
    
    /**
     * Gets this object's class name as a string.
     *
     * @access public
     * @return string Returns the name of this class.
     * @see http://php.net/manual/en/function.get-class.php get_class()
     */
    final public function getClassName()
    {
        return get_class($this);
    }
    
    /**
     * Gets this object's SPL hash representation.
     *
     * @access public
     * @return string Returns the object hash for this object.
     * @see http://php.net/manual/en/function.spl-object-hash.php spl_object_hash()
     */
    final public function getObjectHash()
    {
        return spl_object_hash($this);
    }
    
    /**
     * Returns a string representation of this class instance.
     *
     * Method should be overridden to allow derived instances to be used as a string
     * and have a different representation then the default.
     *
     * For example: Object [ %spl_object_hash% ]
     *
     * @access public
     * @return string Returns the string representation.
     */
    public function toString()
    {
        return sprintf('%s [ %s ]', $this->getClassName(), $this->getObjectHash());
    }
}