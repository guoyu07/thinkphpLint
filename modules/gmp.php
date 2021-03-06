<?php
/** GMP Functions.

See: {@link http://www.php.net/manual/en/ref.gmp.php}
@package gmp
*/


# All these constants are dummy values
define('GMP_ROUND_ZERO', 1);
define('GMP_ROUND_PLUSINF', 1);
define('GMP_ROUND_MINUSINF', 1);
define('GMP_VERSION', '0');

/*. resource .*/ function gmp_init(/*. mixed .*/ $number_ /*., args .*/){}
/*. int .*/ function gmp_intval(/*. resource .*/ $gmpnumber){}
/*. string .*/ function gmp_strval(/*. resource .*/ $gmpnumber /*., args .*/){}
/*. resource .*/ function gmp_add(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. resource .*/ function gmp_sub(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. resource .*/ function gmp_mul(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. array .*/ function gmp_div_qr(/*. resource .*/ $a, /*. resource .*/ $b /*., args .*/){}
/*. resource .*/ function gmp_div_r(/*. resource .*/ $a, /*. resource .*/ $b /*., args .*/){}
/*. resource .*/ function gmp_div_q(/*. resource .*/ $a, /*. resource .*/ $b /*., args .*/){}
/*. resource .*/ function gmp_mod(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. resource .*/ function gmp_divexact(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. resource .*/ function gmp_neg(/*. resource .*/ $a){}
/*. resource .*/ function gmp_abs(/*. resource .*/ $a){}
/*. resource .*/ function gmp_fact(/*. int .*/ $a){}
/*. resource .*/ function gmp_pow(/*. resource .*/ $base, /*. int .*/ $exp){}
/*. resource .*/ function gmp_powm(/*. resource .*/ $base, /*. resource .*/ $exp, /*. resource .*/ $mod){}
/*. resource .*/ function gmp_sqrt(/*. resource .*/ $a){}
/*. array .*/ function gmp_sqrtrem(/*. resource .*/ $a){}
/*. bool .*/ function gmp_perfect_square(/*. resource .*/ $a){}
/*. int .*/ function gmp_prob_prime(/*. resource .*/ $a /*., args .*/){}
/*. resource .*/ function gmp_gcd(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. array .*/ function gmp_gcdext(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. resource .*/ function gmp_invert(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. int .*/ function gmp_jacobi(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. int .*/ function gmp_legendre(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. int .*/ function gmp_cmp(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. int .*/ function gmp_sign(/*. resource .*/ $a){}
/*. resource .*/ function gmp_random( /*. args .*/){}
/*. resource .*/ function gmp_and(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. resource .*/ function gmp_or(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. resource .*/ function gmp_com(/*. resource .*/ $a){}
/*. resource .*/ function gmp_xor(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. void .*/ function gmp_setbit(/*. resource .*/ &$a, /*. int .*/ $index /*., args .*/){}
/*. void .*/ function gmp_clrbit(/*. resource .*/ &$a, /*. int .*/ $index){}
/*. int .*/ function gmp_popcount(/*. resource .*/ $a){}
/*. int .*/ function gmp_hamdist(/*. resource .*/ $a, /*. resource .*/ $b){}
/*. int .*/ function gmp_scan0(/*. resource .*/ $a, /*. int .*/ $start){}
/*. int .*/ function gmp_scan1(/*. resource .*/ $a, /*. int .*/ $start){}
/*. resource .*/ function gmp_nextprime(/*. int .*/ $a){}
/*. bool .*/ function gmp_testbit(/*. resource .*/ $a, /*. int .*/ $index){}
