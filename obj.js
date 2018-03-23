const echo = console.log;
const $ig = new class {
	constructor($first = 'Danil', $second = 'Rostov') {
		this.first = $first;
		this.second = $second;
	}
	getFullName() { return 'Mr. ' + this.first + ' ' + this.second; }
};

echo($ig.getFullName());