<?php

/**
 * Interface for adapters to external user sources.
 * Defines functions as interfaces to query these user sources.
 */
interface Ilios_UserSync_UserSource
{
	/**
	 * Constructor.
	 * @param array $config user source configuration
	 * @throws Ilios_UserSync_Exception
	 */
	public function __construct(array $config = array());

	/**
	 * Returns student records from the external user source.
	 * @return Iterator
	 * @throws Ilios_UserSync_Exception
	 */
	public function getAllStudentRecords ();

	/**
	 * Finds and returns user record(s) by a given email address
	 * from the external user source.
	 * @param string $email
	 * @return Iterator
	 * @throws Ilios_UserSync_Exception
	 */
	public function getUserByEmail ($email);

	/**
	 * Finds and returns user record(s) by a given unique id (UID)
	 * from the external user source.
	 * @param string $uid
	 * @return Iterator
	 * @throws Ilios_UserSync_Exception
	 */
	public function getUserByUid ($uid);

	/**
	 * Checks the user store for a student by a given UID.
	 * @param string $uid
	 * @return boolean TRUE if a student can be found, FALSE otherwise
	 * @throws Ilios_UserSync_Exception
	 */
	public function hasStudent ($uid);

	/**
	 * Checks the user store for a user by a given UID.
	 * @param string $uid
	 * @return boolean TRUE if a user can be found, FALSE otherwise
	 * @throws Ilios_UserSync_Exception
	 */
	public function hasUser ($uid);

}
