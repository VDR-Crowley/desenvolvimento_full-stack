function rand(a, b, s = 1) {
  let n1 = b === undefined ? 1 : a;
  let n2 = b === undefined ? a : b;
  let steps = n1 <= n2 ? Math.abs(s) : -Math.abs(s);
  let nums = [];
  for(let i = n1; n1 <= n2 ? i <= n2 : i >= n2; i += steps) {
    nums.push(i);
  }
  return nums;
}
console.log(rand(5));
console.log(rand(6, 11));
console.log(rand(10, 19, 2));
console.log(rand(6, 2));
console.log(rand(8, -3, 4));
