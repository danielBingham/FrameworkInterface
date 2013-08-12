<?PHP
namespace DanielBingham\FrameworkInterface;

abstract class Transaction {
	private $allowed_steps = array();

	public function __construct($allowed_steps)
	{
		$this->allowed_steps = $allowed_steps;
	}

	public function stepTransaction()
	{
		$step = $this->factory->getRequest()->get('step');
		if ( ! in_array($step, $this->allowed_steps)) {
			throw new Exception('Invalid step "' . $step . '".');
		}
		return $step();
	}

}
