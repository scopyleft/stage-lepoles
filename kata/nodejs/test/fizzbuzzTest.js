var assert = require('assert');
var fizzBuzz = require('../fizzbuzz');

describe('FizzBuzz', function() {
  it('fizzbuzz(1) renvoie 1', function() {
    assert.equal(1, fizzBuzz(1))
  });

  it('fizzbuzz(2) renvoie 2', function() {
    assert.equal(2, fizzBuzz(2))
  });

  it('fizzbuzz(3) renvoie fizz', function() {
    assert.equal("fizz", fizzBuzz(3))
  });

  it('fizzbuzz(5) renvoie buzz', function() {
    assert.equal("buzz", fizzBuzz(5))
  });

  it('fizzbuzz(6) renvoie fizz', function() {
    assert.equal("fizz", fizzBuzz(6))
  });

  it('fizzbuzz(9) renvoie fizz', function() {
    assert.equal("fizz", fizzBuzz(9))
  });

  it('fizzbuzz(10) renvoie buzz', function() {
    assert.equal("buzz", fizzBuzz(10))
  });

  it('fizzbuzz(15) renvoie fizzbuzz', function() {
    assert.equal("fizzbuzz", fizzBuzz(15))
  });
});
