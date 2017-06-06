/**
 * @see https://mwop.net/blog/234-Module-Bootstraps-in-Zend-Framework-Dos-and-Donts.html
 */
class Foomodule_Boootstrap extends Zend_Application_Module_Bootstrap
{
    protected function _initPlugins()
    {
        $bootstrap = $this->getApplication();
        $bootstrap->bootstrap('frontcontroller');
        $front = $bootstrap->getResource('frontcontroller');

        $front->registerPlugin(new Foomodule_Plugin_Layout());
    }
}
