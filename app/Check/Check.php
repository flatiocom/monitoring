<?php

namespace Pd\Monitoring\Check;

/**
 * @property int $id {primary}
 * @property \Pd\Monitoring\Project\Project $project {m:1 \Pd\Monitoring\Project\Project::$checks}
 * @property int $type {enum ICheck::TYPE_*}
 * @property int $status {enum ICheck::STATUS_*}
 * @property \DateTime|NULL $lastCheck
 */
abstract class Check extends \Nextras\Orm\Entity\Entity implements
	ICheck
{

	public function __construct()
	{
		parent::__construct();

		$this->status = ICheck::STATUS_ERROR;
	}


	public function getType() : int
	{
		return $this->type;
	}

}
