describe("pow",function(){

	before(function() { console.log("Начало тестов"); });
	after(function() { console.log("Конец тестов"); });

	it("Возводит число 2 в 3 степень",function(){
		assert.equal(pow(2,3),8);
	});

	it("Возводит число 3 в 4 степень",function(){
		assert.equal(pow(3,4),81);
	});

	it("При возведении в отрицательную стпень получим NaN",function(){
		assert(isNaN(pow(2,-1), "pow(2,-1) не Nan"));
	});

	it("при возведении в дробную степень результат NaN", function() {
    	assert(isNaN(pow(2, 1.5)), "pow(2, -1.5) не NaN");
    });

    it("Любое число в 0 степени 1",function(){
    	assert.equal(pow(3,0),1);
    });
});