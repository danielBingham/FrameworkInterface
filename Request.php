<?PHP
namespace DanielBingham\FrameworkInterface;

interface Request {

	public function getFromPost($name='');

	public function getFromGet($name='');
	
	public function getFromCookie($name='');

	public function getFromRequest($name='');
}
