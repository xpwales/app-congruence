<?php

namespace XpwCongruence\ModelUtility\EnabledStatus;

interface EnabledStatusAwareInterface
{
	/**
	 * @return bool
	 */
	public function getIsEnabled();

	/**
	 * @param bool $flag
	 *
	 * @return $this
	 */
	public function setIsEnabled($flag);

}//end interface