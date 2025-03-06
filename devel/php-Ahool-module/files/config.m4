PHP_ARG_ENABLE([ahool],
  [whether to enable ahool support],
  [AS_HELP_STRING([--enable-ahool],
    [Enable ahool support])],
  [no])

PHP_ADD_INCLUDE(/usr/local/include)

PHP_ADD_LIBRARY_WITH_PATH(netgraph, /usr/lib, AHOOL_SHARED_LIBADD)
PHP_ADD_LIBRARY_WITH_PATH(pfctl, /usr/lib, AHOOL_SHARED_LIBADD)
PHP_ADD_LIBRARY_WITH_PATH(vici, /usr/local/lib/ipsec, AHOOL_SHARED_LIBADD)

PHP_SUBST(AHOOL_SHARED_LIBADD)

if test "$PHP_AHOOL" != "no"; then
  AC_DEFINE(HAVE_AHOOL, 1, [ Have ahool support ])
  PHP_NEW_EXTENSION(Ahool, Ahool.c %%DUMMYNET%% %%ETHERSWITCH%%, $ext_shared)
fi
