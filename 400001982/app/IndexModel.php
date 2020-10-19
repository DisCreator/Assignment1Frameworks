<?php
class IndexModel extends Observable_Model{
	public function getAll(): array
	{
		//Get the courses data
		$data = $this->loadData(DATA_DIR. '/courses.json');

		//Get the popular and recommended columns from the data
		$pop_col = array_column($data['courses'], 3);
		$rec_col = array_column($data['courses'], 2)
		$courses = $data['courses']; //copy of the array to do 2 different sorts

		//sort arrays by recommended and popular
		array_multisort($pop_col, SORT_DESC, $data['courses']);
		array_multisort($rec_col, SORT_DESC, $courses);

		//take only the top 8 of the list to display
		$recommended = array_slice($data['courses'], 0,8);
		$popular =array_slice($courses,0,8);

		//return multidimensional array of popular and recommended courses
		return ['popular' => $popular, 'recommended' => $recommended];

		
	}
	public function getRecord(string $id): array
	{
		return [];
	}
}