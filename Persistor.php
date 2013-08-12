<?PHP
namespace DanielBingham\FrameworkInterface;

interface Persistor {

	public function save(Persistable $entity);
	
	public function delete(Persistable $entity);

}
