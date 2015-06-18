<?php namespace Divinityfound\ArrayToBootstrapTable;

	class Table {
		private $classes = 'table table-hover table-condensed';
		private $keys    = array();
		private $values  = array();
		private $table;

		public function setClasses($value) {
			$this->classes = $value;
			return $this;
		}

		public function setKeys($value) {
			$this->keys = $value;
			return $this;
		}

		public function setValues($value) {
			$this->values = $value;
			return $this;
		}

		public function buildTable() {
			$this->table = '<table class="'.$this->classes.'"><thead><tr>%s</tr></thead><tbody>%s</tbody></table>';
			$content = array(0 => '', 1 => '');
			foreach ($this->keys as $key => $value) {
				$content[0] .= sprintf('<th>%s</th>',$value);
			}
			foreach ($this->values as $key => $values) {
				$content[1] .= '<tr>';
				foreach ($values as $key2 => $value) {
					$content[1] .= sprintf('<td>%s</td>',$value);
				}
				$content[1] .= '</tr>';
			}
			return sprintf($this->table,$content[0],$content[1]);
		}
	}
?>