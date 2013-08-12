<?PHP
namespace DanielBingham\FrameworkInterface;

abstract class Query {

	public abstract function __construct($entity_name);

	public abstract function with($entity_name);

	public abstract function filter($filter);

	public abstract function execute();

}

