module.exports = function (nombre) {
  if (nombre % 15 == 0) {
    return 'fizzbuzz'
  } else if (nombre % 5 == 0) {
    return 'buzz'
  } else if (nombre % 3 == 0) {
    return 'fizz'
  } else {
    return nombre
  }
}
