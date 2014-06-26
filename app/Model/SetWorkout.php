<?php
App::uses('AppModel', 'Model');
/**
 * SetWorkout Model
 *
 * @property Workout $Workout
 */
class SetWorkout extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'set_workout';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Workout' => array(
			'className' => 'Workout',
			'foreignKey' => 'workout_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
