const sum = require("../js/sum");
const pair = require("../js/pair");
const bonjour = require("../js/bonjour");

test('adds 1 + 2 to equal 3', () => {
    expect(sum(1, 2)).toBe(3);
  });

  test('2 should be pair ', () => {
    expect(pair(2)).toBeTruthy()
  });

  test('4 should be pair ', () => {
    expect(pair(4)).toBeTruthy()
  });

  test('6 should be pair ', () => {
    expect(pair(6)).toBeTruthy()
  });

  test('1 should be impair ', () => {
    expect(pair(1)).toBeFalsy()
  });

  test('3 should be impair ', () => {
    expect(pair(3)).toBeFalsy()
  });

  test('5 should be impair ', () => {
    expect(pair(5)).toBeFalsy()
  });

  test('bonjour should print bonjour Alyson', () => {
    expect(bonjour("Alyson")).toBe("Bonjour Alyson")
  });

  test('bonjour should print bonjour théo', () => {
    expect(bonjour("Théo")).toBe("Bonjour Théo")
  });

  test('bonjour should print bonjour Cadu', () => {
    expect(bonjour("Cadu")).toBe("Bonjour Cadu")
  });

