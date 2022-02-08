<?php
namespace phel\core;
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\core"
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "*ns*",
  "\\phel\\core",
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "Returns the namespace in the current scope.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 36,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 38,
      \Phel\Lang\Keyword::create("column"), 17
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "argv",
  (($GLOBALS)[("argv")] ?? null),
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "Array of arguments passed to script.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 40,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 42,
      \Phel\Lang\Keyword::create("column"), 33
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "list",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\list";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      return (function() use($xs) {
        $target_1 = (\Phel\Lang\TypeFactory::getInstance());
        return $target_1->persistentListFromArray(array(...(($xs) ?? [])));
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(list & xs)\n```\nCreates a new list. If no argument is provided, an empty list is created.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 48,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 50,
      \Phel\Lang\Keyword::create("column"), 105
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "vector",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\vector";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      return (function() use($xs) {
        $target_3 = (\Phel\Lang\TypeFactory::getInstance());
        return $target_3->persistentVectorFromArray(array(...(($xs) ?? [])));
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(vetcor & xs)\n```\nCreates a new vector. If no argument is provided, an empty list is created.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 52,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 54,
      \Phel\Lang\Keyword::create("column"), 107
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "hash-map",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\hash_map";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      return (function() use($xs) {
        $target_5 = (\Phel\Lang\TypeFactory::getInstance());
        return $target_5->persistentMapFromArray(array(...(($xs) ?? [])));
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(hash-map & xs)\n```\nCreates a new hash map. If no argument is provided, an empty hash map is created. The number of parameters must be even.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 56,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 58,
      \Phel\Lang\Keyword::create("column"), 104
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "next",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\next";

    public function __invoke($xs) {
      if (\Phel\Lang\Truthy::isTruthy(($xs === null))) {
        return null;
      } else {
        if (\Phel\Lang\Truthy::isTruthy(($xs instanceof \Phel\Lang\CdrInterface))) {
          return (function() use($xs) {
            $target_8 = $xs;
            return $target_8->cdr();
          })();
        } else {
          if (\Phel\Lang\Truthy::isTruthy(is_array($xs))) {
            $sliced_7 = array_slice($xs, 1);
            if (\Phel\Lang\Truthy::isTruthy(empty($sliced_7))) {
              return null;
            } else {
              return $sliced_7;
            }

          } else {
            throw (new \InvalidArgumentException(("cannot call 'next on " . gettype($xs))));
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(next xs)\n```\nReturns the sequence of elements after the first element. If there are no\nelements, returns nil.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 60,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 74,
      \Phel\Lang\Keyword::create("column"), 81
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "first",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\first";

    public function __invoke($xs) {
      if (\Phel\Lang\Truthy::isTruthy(($xs instanceof \Phel\Lang\FirstInterface))) {
        return (function() use($xs) {
          $target_10 = $xs;
          return $target_10->first();
        })();
      } else {
        return (($xs)[(0)] ?? null);
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(first xs)\n```\nReturns the first element of an indexed sequence or nil.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 76,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 81,
      \Phel\Lang\Keyword::create("column"), 24
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "concat1",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\concat1";

    public function __invoke($xs, $ys) {
      if (\Phel\Lang\Truthy::isTruthy((null === $ys))) {
        return $xs;
      } else {
        if (\Phel\Lang\Truthy::isTruthy(($xs instanceof \Phel\Lang\ConcatInterface))) {
          return (function() use($xs,$ys) {
            $target_12 = $xs;
            return $target_12->concat($ys);
          })();
        } else {
          foreach (($ys ?? []) as $y) {
            ($xs)[] = $y;
          }
          return $xs;
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("private"), true,
    \Phel\Lang\Keyword::create("doc"), "Concatenates two sequential data structures.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 83,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 94,
      \Phel\Lang\Keyword::create("column"), 17
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "concat",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\concat";

    public function __invoke($arr, ...$others) {
      $others = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($others);
      if (\Phel\Lang\Truthy::isTruthy((null === $arr))) {
        return \Phel\Lang\TypeFactory::getInstance()->persistentListFromArray([]);
      } else {
        $res_14 = $arr;
        $other_15 = $others;
        while (true) {
          if (\Phel\Lang\Truthy::isTruthy((null === $other_15))) {
            return $res_14;
          } else {
            $__phel_16_20 = $other_15;
            $__phel_17_21 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_16_20);
            $__phel_18_22 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_16_20);
            $y_23 = $__phel_17_21;
            $__phel_19_24 = $__phel_18_22;
            $ys_25 = $__phel_19_24;
            $__phel_26 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat1"))($res_14, $y_23);
            $__phel_27 = $ys_25;
            $res_14 = $__phel_26;
            $other_15 = $__phel_27;
            continue;

          }
          break;
        }
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(concat arr & xs)\n```\nConcatenates multiple sequential data structures.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 96,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 106,
      \Phel\Lang\Keyword::create("column"), 44
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "meta",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\meta";

    public function __invoke($obj) {
      return (function() use($obj) {
        $target_30 = $obj;
        return $target_30->getMeta();
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(meta obj)\n```\nGets the meta of the give object.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 114,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 117,
      \Phel\Lang\Keyword::create("column"), 28
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "set-meta!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\set_meta!";

    public function __invoke($obj, $meta) {
      return (function() use($obj,$meta) {
        $target_32 = $obj;
        return $target_32->withMeta($meta);
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(set-meta! obj)\n```\nSets the meta data to a given object.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 119,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 122,
      \Phel\Lang\Keyword::create("column"), 34
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "defn-builder",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defn_builder";

    public function __invoke($name, $meta, ...$fdecl) {
      $fdecl = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($fdecl);
      $meta_34 = ((\Phel\Lang\Truthy::isTruthy(is_string((($fdecl)[(0)] ?? null)))) ? (function() use($name,$meta,$fdecl) {
        $target_42 = $meta;
        return $target_42->put(\Phel\Lang\Keyword::create("doc"), (($fdecl)[(0)] ?? null));
      })() : $meta);
      $fdecl_35 = ((\Phel\Lang\Truthy::isTruthy(is_string((($fdecl)[(0)] ?? null)))) ? (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($fdecl) : $fdecl);
      $meta_36 = ((\Phel\Lang\Truthy::isTruthy(((($fdecl_35)[(0)] ?? null) instanceof \Phel\Lang\Collections\Map\PersistentMapInterface))) ? (function() use($name,$meta_34,$fdecl_35) {
        $target_43 = $meta_34;
        return $target_43->merge((($fdecl_35)[(0)] ?? null));
      })() : $meta_34);
      $fdecl_37 = ((\Phel\Lang\Truthy::isTruthy(((($fdecl_35)[(0)] ?? null) instanceof \Phel\Lang\Collections\Map\PersistentMapInterface))) ? (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($fdecl_35) : $fdecl_35);
      $args_38 = (($fdecl_37)[(0)] ?? null);
      $docstring_39 = (($meta_36)[(\Phel\Lang\Keyword::create("doc"))] ?? null);
      $docstring_40 = ("```phel\n(" . $name . " " . implode(" ", array(...(($args_38) ?? []))) . ")\n```\n" . $docstring_39);
      $meta_41 = (function() use($name,$meta_36,$fdecl_37,$args_38,$docstring_40) {
        $target_44 = $meta_36;
        return $target_44->put(\Phel\Lang\Keyword::create("doc"), $docstring_40);
      })();
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("def"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($name), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($meta_41), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("fn"))), $fdecl_37)) ?? []))))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("private"), true,
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 128,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 148,
      \Phel\Lang\Keyword::create("column"), 40
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "defn",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defn";

    public function __invoke($name, ...$fdecl) {
      $fdecl = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($fdecl);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "defn-builder"))($name, \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(), ...(($fdecl) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(defn name & fdecl)\n```\nDefine a new global function.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 150,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 153,
      \Phel\Lang\Keyword::create("column"), 57
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "def-",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\def_";

    public function __invoke($name, $value) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("def"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($name), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "hash-map"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(\Phel\Lang\Keyword::create("private")), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(true))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($value))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(def- name value)\n```\nDefine a private value that will not be exported.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 155,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 158,
      \Phel\Lang\Keyword::create("column"), 56
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "defmacro",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defmacro";

    public function __invoke($name, ...$fdecl) {
      $fdecl = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($fdecl);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "defn-builder"))($name, \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
        \Phel\Lang\Keyword::create("macro"), true
      ), ...(($fdecl) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(defmacro name & fdecl)\n```\nDefine a macro.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 160,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 163,
      \Phel\Lang\Keyword::create("column"), 68
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "defn-",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defn_";

    public function __invoke($name, ...$fdecl) {
      $fdecl = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($fdecl);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "defn-builder"))($name, \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
        \Phel\Lang\Keyword::create("private"), true
      ), ...(($fdecl) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(defn- name & fdecl)\n```\nDefine a private function that will not be exported.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 165,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 168,
      \Phel\Lang\Keyword::create("column"), 50
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "defmacro-",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defmacro_";

    public function __invoke($name, ...$fdecl) {
      $fdecl = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($fdecl);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "defn-builder"))($name, \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
        \Phel\Lang\Keyword::create("macro"), true,
        \Phel\Lang\Keyword::create("private"), true
      ), ...(($fdecl) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(defmacro- name & fdecl)\n```\nDefine a private macro that will not be exported.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 170,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 173,
      \Phel\Lang\Keyword::create("column"), 62
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "declare",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\declare";

    public function __invoke($name) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("def"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($name), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(null))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(declare name)\n```\nDeclare a global symbol before it is defined.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 175,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 178,
      \Phel\Lang\Keyword::create("column"), 19
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "defstruct",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defstruct";

    public function __invoke($name, $keys, ...$implementations) {
      $implementations = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($implementations);
      $name_str_48 = (function() use($name,$keys,$implementations) {
        $target_52 = $name;
        return $target_52->getName();
      })();
      $munge_49 = (new \Phel\Compiler\Emitter\OutputEmitter\Munge());
      $class_name_str_50 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "*ns*") . "\\" . (function() use($name,$keys,$implementations,$name_str_48,$munge_49) {
        $target_53 = $munge_49;
        return $target_53->encode($name_str_48);
      })());
      $is_name_51 = (\Phel\Lang\Symbol::create(($name_str_48 . "?")));
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("defstruct*"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($name), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($keys), $implementations)) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($name), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(("Creates a new " . $name . " struct.")), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($keys), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($class_name_str_50), $keys)) ?? []))))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($is_name_51), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(("Checks if `x` is an instance of the " . $name . " struct.")), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("x"))))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/is_a"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("x"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($class_name_str_50))) ?? []))))) ?? []))))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(defstruct name keys & implementations)\n```\nDefine a new struct.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 180,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 190,
      \Phel\Lang\Keyword::create("column"), 122
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "comment",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\comment";

    public function __invoke(...$__phel_56) {
      $__phel_56 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__phel_56);
      return null;
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(comment &)\n```\nIgnores the body of the comment.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 192,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 194,
      \Phel\Lang\Keyword::create("column"), 6
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "gensym",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\gensym";

    public function __invoke() {
      return (\Phel\Lang\Symbol::gen());
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(gensym )\n```\nGenerates a new unique symbol.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 196,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 199,
      \Phel\Lang\Keyword::create("column"), 24
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "str",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\str";

    public function __invoke(...$args) {
      $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
      if (\Phel\Lang\Truthy::isTruthy((count($args) == 0))) {
        return "";
      } else {
        return array_reduce(["", ...(($args) ?? [])], function($a, $b) { return ($a . $b); });
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(str & args)\n```\nCreates a string by concatenating values together. If no arguments are\nprovided an empty string is returned. Nil and false are represented as empty\nstring. True is represented as 1. Otherwise it tries to call `__toString`.\nThis is PHP equivalent to `\$args[0] . \$args[1] . \$args[2] ...`.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke(...$args) {
        $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/."))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(""), $args)) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n > 0);
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 201,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 211,
      \Phel\Lang\Keyword::create("column"), 27
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "transient",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\transient";

    public function __invoke($coll) {
      return (function() use($coll) {
        $target_57 = $coll;
        return $target_57->asTransient();
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(transient coll)\n```\nConverts a persistent collection to a transient collection.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 213,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 216,
      \Phel\Lang\Keyword::create("column"), 30
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "persistent",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\persistent";

    public function __invoke($coll) {
      return (function() use($coll) {
        $target_59 = $coll;
        return $target_59->persistent();
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(persistent coll)\n```\nConverts a transient collection to a persistent collection.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 218,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 221,
      \Phel\Lang\Keyword::create("column"), 29
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "set",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\set";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      return (function() use($xs) {
        $target_61 = (\Phel\Lang\TypeFactory::getInstance());
        return $target_61->persistentHashSetFromArray(array(...(($xs) ?? [])));
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(set & xs)\n```\nCreates a new Set. If no argument is provided, an empty Set is created.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 227,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 230,
      \Phel\Lang\Keyword::create("column"), 96
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "keyword",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\keyword";

    public function __invoke($x) {
      return (\Phel\Lang\Keyword::create($x));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(keyword x)\n```\nCreates a new Keyword from a given string.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 232,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 235,
      \Phel\Lang\Keyword::create("column"), 30
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "php-indexed-array",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_indexed_array";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      return array(...(($xs) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(php-indexed-array & xs)\n```\nCreates an PHP indexed array from the given values.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 237,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 240,
      \Phel\Lang\Keyword::create("column"), 23
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "php-associative-array",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_associative_array";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      $cnt_63 = count($xs);
      $res_64 = array();
      if (\Phel\Lang\Truthy::isTruthy((1 === ($cnt_63 % 2)))) {
        throw (new \InvalidArgumentException("An even number of parameters must be provided for 'php-associative-array'"));
      } else {

      }

      $i_65 = 0;
      while (true) {
        if (\Phel\Lang\Truthy::isTruthy(($i_65 < $cnt_63))) {
          ($res_64)[((($xs)[($i_65)] ?? null))] = (($xs)[(($i_65 + 1))] ?? null);
          $__phel_66 = ($i_65 + 2);
          $i_65 = $__phel_66;
          continue;

        } else {
          return $res_64;
        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(php-associative-array & xs)\n```\nCreates a PHP associative array. An even number of parameters must be provided.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 242,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 254,
      \Phel\Lang\Keyword::create("column"), 15
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "equals1",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\equals1";

    public function __invoke($a, $b) {
      if (\Phel\Lang\Truthy::isTruthy(($a instanceof \Phel\Lang\AbstractType))) {
        return (function() use($a,$b) {
          $target_68 = $a;
          return $target_68->equals($b);
        })();
      } else {
        return ($a === $b);
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("private"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(equals1 a b)\n```\n",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 260,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 263,
      \Phel\Lang\Keyword::create("column"), 19
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "cons",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\cons";

    public function __invoke($x, $xs) {
      if (\Phel\Lang\Truthy::isTruthy(is_array($xs))) {
        array_unshift($xs, $x);
        return $xs;
      } else {
        if (\Phel\Lang\Truthy::isTruthy(($xs instanceof \Phel\Lang\ConsInterface))) {
          return (function() use($x,$xs) {
            $target_70 = $xs;
            return $target_70->cons($x);
          })();
        } else {
          if (\Phel\Lang\Truthy::isTruthy(($xs === null))) {
            return \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$x]);
          } else {
            throw (new \InvalidArgumentException(("cannot do cons " . print_r($x, true))));
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(cons x xs)\n```\nPrepends `x` to the beginning of `xs`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 265,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 277,
      \Phel\Lang\Keyword::create("column"), 76
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "ffirst",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\ffirst";

    public function __invoke($xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(ffirst xs)\n```\nSame as `(first (first xs))`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 279,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 282,
      \Phel\Lang\Keyword::create("column"), 21
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "second",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\second";

    public function __invoke($xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($xs));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(second xs)\n```\nReturns the second element of an indexed sequence or nil.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 284,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 287,
      \Phel\Lang\Keyword::create("column"), 20
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "rest",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\rest";

    public function __invoke($xs) {
      if (\Phel\Lang\Truthy::isTruthy(($xs instanceof \Phel\Lang\RestInterface))) {
        return (function() use($xs) {
          $target_72 = $xs;
          return $target_72->rest();
        })();
      } else {
        if (\Phel\Lang\Truthy::isTruthy(is_array($xs))) {
          return array_slice($xs, 1);
        } else {
          throw (new \InvalidArgumentException("cannot do rest"));
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(rest xs)\n```\nReturns the sequence of elements after the first element. If there are no\nelements, returns an empty sequence.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 289,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 297,
      \Phel\Lang\Keyword::create("column"), 68
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "nfirst",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\nfirst";

    public function __invoke($xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(nfirst xs)\n```\nSame as `(next (first xs))`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 299,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 302,
      \Phel\Lang\Keyword::create("column"), 20
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "nnext",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\nnext";

    public function __invoke($xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($xs));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(nnext xs)\n```\nSame as `(next (next xs))`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 304,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 307,
      \Phel\Lang\Keyword::create("column"), 19
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "count",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\count";

    public function __invoke($xs) {
      if (\Phel\Lang\Truthy::isTruthy(($xs instanceof \Countable))) {
        return (function() use($xs) {
          $target_74 = $xs;
          return $target_74->count();
        })();
      } else {
        if (\Phel\Lang\Truthy::isTruthy(is_array($xs))) {
          return count($xs);
        } else {
          if (\Phel\Lang\Truthy::isTruthy(($xs === null))) {
            return 0;
          } else {
            throw (new \InvalidArgumentException(("" . "object is not countable: " . $xs)));
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(count xs)\n```\nCounts the number of elements in a sequence. Can be used on everything that\nimplement the PHP Countable interface.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 309,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 319,
      \Phel\Lang\Keyword::create("column"), 91
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "if-not",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\if_not";

    public function __invoke($test, $then, ...$__phel_76) {
      $__phel_76 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__phel_76);
      $__phel_77_80 = $__phel_76;
      $__phel_78_81 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_77_80);
      $__phel_79_82 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_77_80);
      $else_83 = $__phel_78_81;
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($test), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($else_83), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($then))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(if-not test then & [else])\n```\nShorthand for `(if (not condition) else then)`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 325,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 328,
      \Phel\Lang\Keyword::create("column"), 26
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "when",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\when";

    public function __invoke($test, ...$body) {
      $body = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($body);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($test), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(when test & body)\n```\nEvaluates `test` and if that is logical true, evaluates `body`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 330,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 333,
      \Phel\Lang\Keyword::create("column"), 26
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "when-not",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\when_not";

    public function __invoke($test, ...$body) {
      $body = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($body);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($test), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(null), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(when-not test & body)\n```\nEvaluates `test` and if that is logical false, evaluates `body`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 335,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 338,
      \Phel\Lang\Keyword::create("column"), 30
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "cond",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\cond";

    public function __invoke(...$pairs) {
      $pairs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($pairs);
      $cnt_84 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($pairs);
      if (\Phel\Lang\Truthy::isTruthy(($cnt_84 === 0))) {
        return null;
      } else {
        if (\Phel\Lang\Truthy::isTruthy(($cnt_84 === 1))) {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($pairs);
        } else {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if")), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($pairs), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "second"))($pairs), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "cons"))((\Phel\Lang\Symbol::create("cond")), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($pairs))) ?? []))));
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(cond & pairs)\n```\nTakes a set of test/expression pairs. Evaluates each test one at a time.\n  If a test returns logically true, the expression is evaluated and return.\n  If no test matches a final last expression can be provided that is than\n  evaluated and return. Otherwise, nil is returned.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 340,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 354,
      \Phel\Lang\Keyword::create("column"), 64
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "case",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\case";

    public function __invoke($e, ...$pairs) {
      $pairs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($pairs);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($pairs))) {
        $v_85 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"))();
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($v_85), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($e))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/equals1"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($v_85), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($pairs)))) ?? []))))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($pairs))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("case"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($v_85), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($pairs)))) ?? []))))) ?? []))))) ?? []));
      } else {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($pairs);
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(case e & pairs)\n```\nTakes an expression `e` and a set of test-content/expression pairs. First\n  evaluates `e` and the then finds the first pair where the test-constant matches\n  the result of `e`. The associated expression is then evaluated and returned.\n  If no matches can be found a final last expression can be provided that is\n  than evaluated and return. Otherwise, nil is returned.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 356,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 369,
      \Phel\Lang\Keyword::create("column"), 19
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "or",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\or";

    public function __invoke(...$args) {
      $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
      $__phel_86_87 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($args);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_86_87, 0))) {
        return null;
      } else {
        $__phel_88_89 = $__phel_86_87;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_88_89, 1))) {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($args);
        } else {
          $v_90 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"))();
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($v_90), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($args)))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($v_90), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($v_90), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("or"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($args))) ?? []))))) ?? []))))) ?? []));
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(or & args)\n```\nEvaluates each expression one at a time, from left to right. If a form\nreturns a logical true value, or returns that value and doesn't evaluate any of\nthe other expressions, otherwise it returns the value of the last expression.\nCalling or without arguments, returns nil.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 375,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 386,
      \Phel\Lang\Keyword::create("column"), 42
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "and",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\and";

    public function __invoke(...$args) {
      $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
      $__phel_91_92 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($args);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_91_92, 0))) {
        return true;
      } else {
        $__phel_93_94 = $__phel_91_92;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_93_94, 1))) {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($args);
        } else {
          $v_95 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"))();
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($v_95), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($args)))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($v_95), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("and"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($args))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($v_95))) ?? []))))) ?? []));
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(and & args)\n```\nEvaluates each expression one at a time, from left to right. If a form\nreturns logical false, and returns that value and doesn't evaluate any of the\nother expressions, otherwise it returns the value of the last expression.\nCalling the and function without arguments returns true.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 388,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 399,
      \Phel\Lang\Keyword::create("column"), 43
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "id2",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\id2";

    public function __invoke($a, $b) {
      if (\Phel\Lang\Truthy::isTruthy(($a instanceof \Phel\Lang\IdenticalInterface))) {
        return (function() use($a,$b) {
          $target_96 = $a;
          return $target_96->identical($b);
        })();
      } else {
        return ($a === $b);
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("private"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(id2 a b)\n```\n",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 401,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 404,
      \Phel\Lang\Keyword::create("column"), 19
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "id",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\id";

    public function __invoke($a, ...$more) {
      $more = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($more);
      while (true) {
        $__phel_98_99 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($more);
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_98_99, 0))) {
          return true;
        } else {
          $__phel_100_101 = $__phel_98_99;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_100_101, 1))) {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "id2"))($a, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more));
          } else {
            if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "id2"))($a, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more)))) {
              $__phel_102 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more);
              $__phel_103 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($more);
              $a = $__phel_102;
              $more = $__phel_103;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(id a & more)\n```\nChecks if all values are identically. Same as `a === b` in PHP.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 406,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 414,
      \Phel\Lang\Keyword::create("column"), 14
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "=",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\=";

    public function __invoke($a, ...$more) {
      $more = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($more);
      while (true) {
        $__phel_106_107 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($more);
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_106_107, 0))) {
          return true;
        } else {
          $__phel_108_109 = $__phel_106_107;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_108_109, 1))) {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($a, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more));
          } else {
            if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($a, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more)))) {
              $__phel_110 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more);
              $__phel_111 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($more);
              $a = $__phel_110;
              $more = $__phel_111;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(= a & more)\n```\nChecks if all values are equal. Same as `a == b` in PHP.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 416,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 424,
      \Phel\Lang\Keyword::create("column"), 14
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "not",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\not";

    public function __invoke($x) {
      if (\Phel\Lang\Truthy::isTruthy($x)) {
        return false;
      } else {
        return true;
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(not x)\n```\nThe `not` function returns `true` if the given value is logical false and\n`false` otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 426,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 430,
      \Phel\Lang\Keyword::create("column"), 20
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "not=",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\not=";

    public function __invoke($a, ...$more) {
      $more = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($more);
      $__phel_114_115 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($more);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_114_115, 0))) {
        return false;
      } else {
        $__phel_116_117 = $__phel_114_115;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_116_117, 1))) {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "not"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($a, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more)));
        } else {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "not"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($a, ...(($more) ?? [])));
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(not= a & more)\n```\nChecks if all values are unequal. Same as `a != b` in PHP.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 432,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 438,
      \Phel\Lang\Keyword::create("column"), 28
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "<",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\<";

    public function __invoke($a, ...$more) {
      $more = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($more);
      while (true) {
        $__phel_118_119 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($more);
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_118_119, 0))) {
          return true;
        } else {
          $__phel_120_121 = $__phel_118_119;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_120_121, 1))) {
            return ($a < (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more));
          } else {
            if (\Phel\Lang\Truthy::isTruthy(($a < (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more)))) {
              $__phel_122 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more);
              $__phel_123 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($more);
              $a = $__phel_122;
              $more = $__phel_123;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(< a & more)\n```\nChecks if each argument is strictly less than the following argument. Returns a boolean.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($a), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($b))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n === 2);
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 440,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 450,
      \Phel\Lang\Keyword::create("column"), 14
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "<=",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\<=";

    public function __invoke($a, ...$more) {
      $more = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($more);
      while (true) {
        $__phel_126_127 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($more);
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_126_127, 0))) {
          return true;
        } else {
          $__phel_128_129 = $__phel_126_127;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_128_129, 1))) {
            return ($a <= (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more));
          } else {
            if (\Phel\Lang\Truthy::isTruthy(($a <= (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more)))) {
              $__phel_130 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more);
              $__phel_131 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($more);
              $a = $__phel_130;
              $more = $__phel_131;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(<= a & more)\n```\nChecks if each argument is less than or equal to the following argument. Returns a boolean.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<="))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($a), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($b))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n === 2);
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 452,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 462,
      \Phel\Lang\Keyword::create("column"), 14
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  ">",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\>";

    public function __invoke($a, ...$more) {
      $more = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($more);
      while (true) {
        $__phel_134_135 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($more);
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_134_135, 0))) {
          return true;
        } else {
          $__phel_136_137 = $__phel_134_135;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_136_137, 1))) {
            return ($a > (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more));
          } else {
            if (\Phel\Lang\Truthy::isTruthy(($a > (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more)))) {
              $__phel_138 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more);
              $__phel_139 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($more);
              $a = $__phel_138;
              $more = $__phel_139;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(> a & more)\n```\nChecks if each argument is strictly greater than the following argument. Returns a boolean.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/>"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($a), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($b))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n === 2);
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 464,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 474,
      \Phel\Lang\Keyword::create("column"), 14
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  ">=",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\>=";

    public function __invoke($a, ...$more) {
      $more = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($more);
      while (true) {
        $__phel_142_143 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($more);
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_142_143, 0))) {
          return true;
        } else {
          $__phel_144_145 = $__phel_142_143;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_144_145, 1))) {
            return ($a >= (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more));
          } else {
            if (\Phel\Lang\Truthy::isTruthy(($a >= (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more)))) {
              $__phel_146 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($more);
              $__phel_147 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($more);
              $a = $__phel_146;
              $more = $__phel_147;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(>= a & more)\n```\nChecks if each argument is greater than or equal to the following argument. Returns a boolean.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/>="))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($a), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($b))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n === 2);
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 476,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 486,
      \Phel\Lang\Keyword::create("column"), 14
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "<=>",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\<=>";

    public function __invoke($a, $b) {
      return ($a <=> $b);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(<=> a b)\n```\nAlias for the spaceship PHP operator in ascending order. Returns an int.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<=>"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($a), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($b))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 488,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 492,
      \Phel\Lang\Keyword::create("column"), 16
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  ">=<",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\>=<";

    public function __invoke($a, $b) {
      return ($b <=> $a);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(>=< a b)\n```\nAlias for the spaceship PHP operator in descending order. Returns an int.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<=>"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($b), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($a))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 494,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 498,
      \Phel\Lang\Keyword::create("column"), 16
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "all?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\all?";

    public function __invoke($pred, $xs) {
      while (true) {
        if (\Phel\Lang\Truthy::isTruthy(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs) === 0))) {
          return true;
        } else {
          if (\Phel\Lang\Truthy::isTruthy(($pred)((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs)))) {
            $__phel_150 = $pred;
            $__phel_151 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($xs);
            $pred = $__phel_150;
            $xs = $__phel_151;
            continue;

          } else {
            return false;
          }

        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(all? pred xs)\n```\nReturns true if `(pred x)` is logical true for every `x` in `xs`, else false.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 500,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 506,
      \Phel\Lang\Keyword::create("column"), 11
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "some?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\some?";

    public function __invoke($pred, $xs) {
      while (true) {
        if (\Phel\Lang\Truthy::isTruthy($xs)) {
          $__phel_154_155 = ($pred)((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs));
          if (\Phel\Lang\Truthy::isTruthy($__phel_154_155)) {
            return $__phel_154_155;
          } else {
            $__phel_156 = $pred;
            $__phel_157 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($xs);
            $pred = $__phel_156;
            $xs = $__phel_157;
            continue;

          }

        } else {
          return false;
        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(some? pred xs)\n```\nReturns true if `(pred x)` is logical true for at least one `x` in `xs`, else false.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 508,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 513,
      \Phel\Lang\Keyword::create("column"), 11
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "true?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\true?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "id"))($x, true);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(true? x)\n```\nChecks if `x` is true. Same as `x === true` in PHP.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 515,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 518,
      \Phel\Lang\Keyword::create("column"), 14
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "truthy?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\truthy?";

    public function __invoke($x) {
      return (\Phel\Lang\Truthy::isTruthy($x));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(truthy? x)\n```\nChecks if `x` is truthy. Same as `x == true` in PHP.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 520,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 523,
      \Phel\Lang\Keyword::create("column"), 31
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "false?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\false?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "id"))($x, false);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(false? x)\n```\nChecks if `x` is false. Same as `x === false` in PHP.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 525,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 528,
      \Phel\Lang\Keyword::create("column"), 15
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "nil?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\nil?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "id"))($x, null);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(nil? x)\n```\nReturns true if `x` is nil, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 530,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 533,
      \Phel\Lang\Keyword::create("column"), 13
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "str-contains?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\str_contains?";

    public function __invoke($str, $s) {
      return str_contains($str, $s);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(str-contains? str s)\n```\nTrue if str contains s.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 535,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 538,
      \Phel\Lang\Keyword::create("column"), 27
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "contains?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\contains?";

    public function __invoke($coll, $key) {
      if (\Phel\Lang\Truthy::isTruthy(($coll instanceof \Phel\Lang\ContainsInterface))) {
        return (function() use($coll,$key) {
          $target_160 = $coll;
          return $target_160->contains($key);
        })();
      } else {
        if (\Phel\Lang\Truthy::isTruthy(is_array($coll))) {
          return array_key_exists($key, $coll);
        } else {
          throw (new \InvalidArgumentException(("cannot call 'contains?' on " . get_class($coll))));
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(contains? coll key)\n```\nReturns true if key is present in the given collection, otherwise returns false.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 540,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 546,
      \Phel\Lang\Keyword::create("column"), 107
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "compare",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\compare";

    public function __invoke($x, $y) {
      return ($x <=> $y);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(compare x y)\n```\nAn integer less than, equal to, or greater than zero when `x` is less than,\n  equal to, or greater than `y`, respectively.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($x, $y) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<=>"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($y))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 548,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 553,
      \Phel\Lang\Keyword::create("column"), 16
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "type",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\type";

    public function __invoke($x) {
      if (\Phel\Lang\Truthy::isTruthy(($x instanceof \Phel\Lang\Collections\Vector\PersistentVectorInterface))) {
        return \Phel\Lang\Keyword::create("vector");
      } else {
        if (\Phel\Lang\Truthy::isTruthy(($x instanceof \Phel\Lang\Collections\LinkedList\PersistentListInterface))) {
          return \Phel\Lang\Keyword::create("list");
        } else {
          if (\Phel\Lang\Truthy::isTruthy(($x instanceof \Phel\Lang\Collections\Struct\AbstractPersistentStruct))) {
            return \Phel\Lang\Keyword::create("struct");
          } else {
            if (\Phel\Lang\Truthy::isTruthy(($x instanceof \Phel\Lang\Collections\Map\PersistentMapInterface))) {
              return \Phel\Lang\Keyword::create("hash-map");
            } else {
              if (\Phel\Lang\Truthy::isTruthy(($x instanceof \Phel\Lang\Collections\HashSet\PersistentHashSetInterface))) {
                return \Phel\Lang\Keyword::create("set");
              } else {
                if (\Phel\Lang\Truthy::isTruthy(($x instanceof \Phel\Lang\Keyword))) {
                  return \Phel\Lang\Keyword::create("keyword");
                } else {
                  if (\Phel\Lang\Truthy::isTruthy(($x instanceof \Phel\Lang\Symbol))) {
                    return \Phel\Lang\Keyword::create("symbol");
                  } else {
                    if (\Phel\Lang\Truthy::isTruthy(($x instanceof \Phel\Lang\Variable))) {
                      return \Phel\Lang\Keyword::create("var");
                    } else {
                      if (\Phel\Lang\Truthy::isTruthy(is_int($x))) {
                        return \Phel\Lang\Keyword::create("int");
                      } else {
                        if (\Phel\Lang\Truthy::isTruthy(is_float($x))) {
                          return \Phel\Lang\Keyword::create("float");
                        } else {
                          if (\Phel\Lang\Truthy::isTruthy(is_string($x))) {
                            return \Phel\Lang\Keyword::create("string");
                          } else {
                            if (\Phel\Lang\Truthy::isTruthy(is_null($x))) {
                              return \Phel\Lang\Keyword::create("nil");
                            } else {
                              if (\Phel\Lang\Truthy::isTruthy(is_bool($x))) {
                                return \Phel\Lang\Keyword::create("boolean");
                              } else {
                                if (\Phel\Lang\Truthy::isTruthy(is_callable($x))) {
                                  return \Phel\Lang\Keyword::create("function");
                                } else {
                                  if (\Phel\Lang\Truthy::isTruthy(is_array($x))) {
                                    return \Phel\Lang\Keyword::createForNamespace("php", "array");
                                  } else {
                                    if (\Phel\Lang\Truthy::isTruthy(is_resource($x))) {
                                      return \Phel\Lang\Keyword::createForNamespace("php", "resource");
                                    } else {
                                      if (\Phel\Lang\Truthy::isTruthy(is_object($x))) {
                                        return \Phel\Lang\Keyword::createForNamespace("php", "object");
                                      } else {
                                        return \Phel\Lang\Keyword::create("unknown");
                                      }

                                    }

                                  }

                                }

                              }

                            }

                          }

                        }

                      }

                    }

                  }

                }

              }

            }

          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(type x)\n```\nReturns the type of `x`. Following types can be returned:\n\n* `:vector`\n* `:list`\n* `:struct`\n* `:hash-map`\n* `:set`\n* `:keyword`\n* `:symbol`\n* `:var`\n* `:int`\n* `:float`\n* `:string`\n* `:nil`\n* `:boolean`\n* `:function`\n* `:php/array`\n* `:php/resource`\n* `:php/object`\n* `:unknown`",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 559,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 599,
      \Phel\Lang\Keyword::create("column"), 14
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "float?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\float?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("float"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(float? x)\n```\nReturns true if `x` is float point number, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 601,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 604,
      \Phel\Lang\Keyword::create("column"), 22
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "int?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\int?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("int"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(int? x)\n```\nReturns true if `x` is an integer number, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 606,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 609,
      \Phel\Lang\Keyword::create("column"), 20
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "number?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\number?";

    public function __invoke($x) {
      $__phel_162_163 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("int"));
      if (\Phel\Lang\Truthy::isTruthy($__phel_162_163)) {
        return $__phel_162_163;
      } else {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("float"));
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(number? x)\n```\nReturns true if `x` is a number, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 611,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 614,
      \Phel\Lang\Keyword::create("column"), 45
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "string?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\string?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("string"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(string? x)\n```\nReturns true if `x` is a string, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 616,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 619,
      \Phel\Lang\Keyword::create("column"), 23
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "keyword?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\keyword?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("keyword"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(keyword? x)\n```\nReturns true if `x` is a keyword, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 621,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 624,
      \Phel\Lang\Keyword::create("column"), 24
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "symbol?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\symbol?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("symbol"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(symbol? x)\n```\nReturns true if `x` is a symbol, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 626,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 629,
      \Phel\Lang\Keyword::create("column"), 23
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "function?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\function?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("function"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(function? x)\n```\nReturns true if `x` is a function, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 631,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 634,
      \Phel\Lang\Keyword::create("column"), 25
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "struct?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\struct?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("struct"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(struct? x)\n```\nReturns true if `x` is a struct, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 636,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 639,
      \Phel\Lang\Keyword::create("column"), 23
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "hash-map?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\hash_map?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("hash-map"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(hash-map? x)\n```\nReturns true if `x` is a hash map, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 641,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 644,
      \Phel\Lang\Keyword::create("column"), 25
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "vector?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\vector?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("vector"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(vector? x)\n```\nReturns true if `x` is a vector, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 646,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 649,
      \Phel\Lang\Keyword::create("column"), 23
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "list?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\list?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("list"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(list? x)\n```\nReturns true if `x` is a list, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 651,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 654,
      \Phel\Lang\Keyword::create("column"), 21
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "boolean?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\boolean?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("boolean"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(boolean? x)\n```\nReturns true if `x` is a boolean, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 656,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 659,
      \Phel\Lang\Keyword::create("column"), 24
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "php-array?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_array?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::createForNamespace("php", "array"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(php-array? x)\n```\nReturns true if `x` is a PHP Array, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 661,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 664,
      \Phel\Lang\Keyword::create("column"), 26
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "php-resource?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_resource?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::createForNamespace("php", "resource"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(php-resource? x)\n```\nReturns true if `x` is a PHP resource, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 666,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 669,
      \Phel\Lang\Keyword::create("column"), 29
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "php-object?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_object?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::createForNamespace("php", "object"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(php-object? x)\n```\nReturns true if `x` is a PHP object, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 671,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 674,
      \Phel\Lang\Keyword::create("column"), 27
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "empty?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\empty?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))(0, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($x));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(empty? x)\n```\nReturns true if `(count x)` is zero, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 676,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 679,
      \Phel\Lang\Keyword::create("column"), 18
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "indexed-php-array?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\indexed_php_array?";

    public function __invoke($x) {
      $__phel_164_165 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::createForNamespace("php", "array"));
      if (\Phel\Lang\Truthy::isTruthy($__phel_164_165)) {
        $__phel_166_167 = empty($x);
        if (\Phel\Lang\Truthy::isTruthy($__phel_166_167)) {
          return $__phel_166_167;
        } else {
          return (array_keys($x) === range(0, (count($x) - 1)));
        }

      } else {
        return $__phel_164_165;
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("private"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(indexed-php-array? x)\n```\n",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 681,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 687,
      \Phel\Lang\Keyword::create("column"), 73
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "indexed?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\indexed?";

    public function __invoke($x) {
      $t_168 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x);
      $__phel_169_170 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($t_168, \Phel\Lang\Keyword::create("list"));
      if (\Phel\Lang\Truthy::isTruthy($__phel_169_170)) {
        return $__phel_169_170;
      } else {
        $__phel_171_172 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($t_168, \Phel\Lang\Keyword::create("vector"));
        if (\Phel\Lang\Truthy::isTruthy($__phel_171_172)) {
          return $__phel_171_172;
        } else {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "indexed-php-array?"))($x);
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(indexed? x)\n```\nReturns true if `x` is indexed sequence, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 689,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 696,
      \Phel\Lang\Keyword::create("column"), 30
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "associative?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\associative?";

    public function __invoke($x) {
      $t_173 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x);
      $__phel_174_175 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($t_173, \Phel\Lang\Keyword::create("hash-map"));
      if (\Phel\Lang\Truthy::isTruthy($__phel_174_175)) {
        return $__phel_174_175;
      } else {
        $__phel_176_177 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($t_173, \Phel\Lang\Keyword::create("struct"));
        if (\Phel\Lang\Truthy::isTruthy($__phel_176_177)) {
          return $__phel_176_177;
        } else {
          $__phel_178_179 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($t_173, \Phel\Lang\Keyword::createForNamespace("php", "array"));
          if (\Phel\Lang\Truthy::isTruthy($__phel_178_179)) {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "not"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "indexed-php-array?"))($x));
          } else {
            return $__phel_178_179;
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(associative? x)\n```\nReturns true if `x` is associative data structure, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 698,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 705,
      \Phel\Lang\Keyword::create("column"), 59
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "set?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\set?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($x), \Phel\Lang\Keyword::create("set"));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(set? x)\n```\nReturns true if `x` is a set, false otherwise.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 707,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 710,
      \Phel\Lang\Keyword::create("column"), 20
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "peek",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\peek";

    public function __invoke($xs) {
      return (($xs)[(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs) - 1))] ?? null);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(peek xs)\n```\nReturns the last element of a sequence.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 716,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 719,
      \Phel\Lang\Keyword::create("column"), 37
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "push",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\push";

    public function __invoke($xs, $x) {
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "php-array?"))($xs))) {
        ($xs)[] = $x;
        return $xs;
      } else {
        if (\Phel\Lang\Truthy::isTruthy((function() use($xs,$x) {
          $__phel_180_181 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector?"))($xs);
          if (\Phel\Lang\Truthy::isTruthy($__phel_180_181)) {
            return $__phel_180_181;
          } else {
            return ($xs instanceof \Phel\Lang\Collections\Vector\TransientVectorInterface);
          }

        })())) {
          return (function() use($xs,$x) {
            $target_184 = $xs;
            return $target_184->append($x);
          })();
        } else {
          if (\Phel\Lang\Truthy::isTruthy((function() use($xs,$x) {
            $__phel_182_183 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "set?"))($xs);
            if (\Phel\Lang\Truthy::isTruthy($__phel_182_183)) {
              return $__phel_182_183;
            } else {
              return ($xs instanceof \Phel\Lang\Collections\HashSet\TransientHashSetInterface);
            }

          })())) {
            return (function() use($xs,$x) {
              $target_185 = $xs;
              return $target_185->add($x);
            })();
          } else {
            if (\Phel\Lang\Truthy::isTruthy(($xs instanceof \Phel\Lang\PushInterface))) {
              return (function() use($xs,$x) {
                $target_186 = $xs;
                return $target_186->push($x);
              })();
            } else {
              throw (new \InvalidArgumentException(("" . "Cannot push on type " . (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "type"))($xs))));
            }

          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(push xs x)\n```\nInserts `x` at the end of the sequence `xs`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 721,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 730,
      \Phel\Lang\Keyword::create("column"), 62
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "pop",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\pop";

    public function __invoke(&$xs) {
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "php-array?"))($xs))) {
        return array_pop($xs);
      } else {
        if (\Phel\Lang\Truthy::isTruthy(($xs instanceof \Phel\Lang\PopInterface))) {
          return (function() use($xs) {
            $target_190 = $xs;
            return $target_190->pop();
          })();
        } else {
          throw (new \InvalidArgumentException("Cannot pop"));
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(pop xs)\n```\nRemoves the last element of the array `xs`. If the array is empty\n  returns nil.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 732,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 739,
      \Phel\Lang\Keyword::create("column"), 61
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "remove",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\remove";

    public function __invoke(&$xs, $offset, ...$__phel_192) {
      $__phel_192 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__phel_192);
      $__phel_193_196 = $__phel_192;
      $__phel_194_197 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_193_196);
      $__phel_195_198 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_193_196);
      $n_199 = $__phel_194_197;
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "php-array?"))($xs))) {
        if (\Phel\Lang\Truthy::isTruthy($n_199)) {
          return array_splice($xs, $offset, $n_199);
        } else {
          return array_splice($xs, $offset);
        }

      } else {
        if (\Phel\Lang\Truthy::isTruthy(($xs instanceof \Phel\Lang\RemoveInterface))) {
          return (function() use($xs,$offset,$__phel_192,$__phel_193_196,$__phel_194_197,$__phel_195_198,$n_199) {
            $target_200 = $xs;
            return $target_200->remove($offset, $n_199);
          })();
        } else {
          throw (new \InvalidArgumentException("Cannot remove"));
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(remove xs offset & [n])\n```\nRemoves up to `n` element from array `xs` starting at index `offset`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 741,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 747,
      \Phel\Lang\Keyword::create("column"), 64
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "get",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\get";

    public function __invoke($ds, $k, ...$__phel_202) {
      $__phel_202 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__phel_202);
      $__phel_203_206 = $__phel_202;
      $__phel_204_207 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_203_206);
      $__phel_205_208 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_203_206);
      $opt_209 = $__phel_204_207;
      $res_210 = (($ds)[($k)] ?? null);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "nil?"))($res_210))) {
        return $opt_209;
      } else {
        return $res_210;
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(get ds k & [opt])\n```\nGet the value mapped to `key` from the datastructure `ds`.\n  Returns `opt` or nil if the value cannot be found.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 749,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 756,
      \Phel\Lang\Keyword::create("column"), 12
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "put",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\put";

    public function __invoke($ds, $key, $value) {
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "php-array?"))($ds))) {
        throw (new \InvalidArgumentException("Cannot call put on pure PHP\narrays. Use (php/aset ds key value)"));
      } else {
        if (\Phel\Lang\Truthy::isTruthy((function() use($ds,$key,$value) {
          $__phel_211_212 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "struct?"))($ds);
          if (\Phel\Lang\Truthy::isTruthy($__phel_211_212)) {
            return $__phel_211_212;
          } else {
            $__phel_213_214 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "hash-map?"))($ds);
            if (\Phel\Lang\Truthy::isTruthy($__phel_213_214)) {
              return $__phel_213_214;
            } else {
              return ($ds instanceof \Phel\Lang\Collections\Map\TransientMapInterface);
            }

          }

        })())) {
          return (function() use($ds,$key,$value) {
            $target_217 = $ds;
            return $target_217->put($key, $value);
          })();
        } else {
          if (\Phel\Lang\Truthy::isTruthy((function() use($ds,$key,$value) {
            $__phel_215_216 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector?"))($ds);
            if (\Phel\Lang\Truthy::isTruthy($__phel_215_216)) {
              return $__phel_215_216;
            } else {
              return ($ds instanceof \Phel\Lang\Collections\Vector\TransientVectorInterface);
            }

          })())) {
            return (function() use($ds,$key,$value) {
              $target_218 = $ds;
              return $target_218->update($key, $value);
            })();
          } else {
            ($ds)[($key)] = $value;
            return $ds;
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(put ds key value)\n```\nPuts `value` mapped to `key` on the datastructure `ds`. Returns `ds`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 758,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 774,
      \Phel\Lang\Keyword::create("column"), 11
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "unset",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\unset";

    public function __invoke($ds, $key) {
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "php-array?"))($ds))) {
        throw (new \InvalidArgumentException("Cannot call unset on pure PHP\narrays. Use (php/aunset ds key)"));
      } else {
        if (\Phel\Lang\Truthy::isTruthy((function() use($ds,$key) {
          $__phel_221_222 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "hash-map?"))($ds);
          if (\Phel\Lang\Truthy::isTruthy($__phel_221_222)) {
            return $__phel_221_222;
          } else {
            return ($ds instanceof \Phel\Lang\Collections\Map\TransientMapInterface);
          }

        })())) {
          return (function() use($ds,$key) {
            $target_226 = $ds;
            return $target_226->remove($key);
          })();
        } else {
          if (\Phel\Lang\Truthy::isTruthy((function() use($ds,$key) {
            $__phel_223_224 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "set?"))($ds);
            if (\Phel\Lang\Truthy::isTruthy($__phel_223_224)) {
              return $__phel_223_224;
            } else {
              return ($ds instanceof \Phel\Lang\Collections\HashSet\TransientHashSetInterface);
            }

          })())) {
            return (function() use($ds,$key) {
              $target_227 = $ds;
              return $target_227->remove($key);
            })();
          } else {
            $x_225 = $ds;
            unset(($x_225)[($key)]);
            return $x_225;
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(unset ds key)\n```\nReturns `ds` without `key`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 776,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 792,
      \Phel\Lang\Keyword::create("column"), 10
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "var",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\var";

    public function __invoke($value) {
      return (function() use($value) {
        $target_230 = (\Phel\Lang\TypeFactory::getInstance());
        return $target_230->variable($value);
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(var value)\n```\nCreates a new variable with the give value.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 798,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 801,
      \Phel\Lang\Keyword::create("column"), 63
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "var?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\var?";

    public function __invoke($x) {
      return ($x instanceof \Phel\Lang\Variable);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(var? x)\n```\nChecks if the given value is a variable.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 803,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 806,
      \Phel\Lang\Keyword::create("column"), 30
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "set!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\set!";

    public function __invoke($variable, $value) {
      return (function() use($variable,$value) {
        $target_232 = $variable;
        return $target_232->set($value);
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(set! variable value)\n```\nSets a new value to the given variable.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 808,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 811,
      \Phel\Lang\Keyword::create("column"), 32
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "deref",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\deref";

    public function __invoke($variable) {
      return (function() use($variable) {
        $target_234 = $variable;
        return $target_234->deref();
      })();
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(deref variable)\n```\nReturn the value inside the variable.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 813,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 816,
      \Phel\Lang\Keyword::create("column"), 28
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "swap!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\swap!";

    public function __invoke($variable, $f, ...$args) {
      $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
      $current_236 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($variable);
      $next_237 = ($f)($current_236, ...(($args) ?? []));
      (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "set!"))($variable, $next_237);
      return $next_237;
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(swap! variable f & args)\n```\nSwaps the value of the variable to `(apply f current-value args)`. Returns the values that is swapped in.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 818,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 824,
      \Phel\Lang\Keyword::create("column"), 10
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "range",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\range";

    public function __invoke($a, ...$rest) {
      $rest = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($rest);
      $__phel_238_239 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($rest);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_238_239, 0))) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "range"))(0, $a, 1);
      } else {
        $__phel_240_241 = $__phel_238_239;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_240_241, 1))) {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "range"))($a, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($rest, 0), 1);
        } else {
          $__phel_242_243 = $__phel_240_241;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_242_243, 2))) {
            $res_244 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
            $begin_245 = $a;
            $end_246 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($rest, 0);
            $step_247 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($rest, 1);
            $cmp_248 = ((\Phel\Lang\Truthy::isTruthy(($step_247 < 0))) ? \Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", ">") : \Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "<"));
            $i_249 = $begin_245;
            while (true) {
              if (\Phel\Lang\Truthy::isTruthy(($cmp_248)($i_249, $end_246))) {
                (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($res_244, $i_249);
                $__phel_250 = ($i_249 + $step_247);
                $i_249 = $__phel_250;
                continue;

              } else {
                return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($res_244);
              }
              break;
            }
          } else {
            throw (new \InvalidArgumentException("Range function expects one, two or three arguments"));
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(range a & rest)\n```\nCreate an array of values `[start, end)`. If the function has one argument the\n  the range `[0, end)` is returned. With two arguments, returns `[start, end)`.\n  The third argument is an optional step width (default 1).",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 830,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 849,
      \Phel\Lang\Keyword::create("column"), 101
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "for-options",
  (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "set"))(\Phel\Lang\Keyword::create("reduce")),
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("private"), true,
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 851,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 851,
      \Phel\Lang\Keyword::create("column"), 32
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "for-builder-options",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\for_builder_options";

    public function __invoke($head, $i, $initial_options) {
      if (\Phel\Lang\Truthy::isTruthy(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($head) <= $i))) {
        return $initial_options;
      } else {
        $binding_252 = (($head)[($i)] ?? null);
        $verb_253 = (($head)[(($i + 1))] ?? null);
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "keyword?"))($binding_252))) {
          $__phel_254_255 = $binding_252;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_254_255, \Phel\Lang\Keyword::create("reduce")))) {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "for-builder-options"))($head, ($i + 2), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($initial_options, \Phel\Lang\Keyword::create("reduce"), $verb_253));
          } else {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "for-builder-options"))($head, ($i + 2), $initial_options);
          }

        } else {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "for-builder-options"))($head, ($i + 3), $initial_options);
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("private"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(for-builder-options head i initial-options)\n```\n",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 853,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 862,
      \Phel\Lang\Keyword::create("column"), 66
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "for-builder",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\for_builder";

    public function __invoke($body, $head, $i) {
      if (\Phel\Lang\Truthy::isTruthy(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($head) <= $i))) {
        return $body;
      } else {
        $binding_256 = (($head)[($i)] ?? null);
        $verb_257 = (($head)[(($i + 1))] ?? null);
        if (\Phel\Lang\Truthy::isTruthy((function() use($body,$head,$i,$binding_256,$verb_257) {
          $__phel_258_259 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "keyword?"))($binding_256);
          if (\Phel\Lang\Truthy::isTruthy($__phel_258_259)) {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "contains?"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "for-options"), $binding_256);
          } else {
            return $__phel_258_259;
          }

        })())) {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "for-builder"))($body, $head, ($i + 2));
        } else {
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "keyword?"))($binding_256))) {
            $rest_260 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "for-builder"))($body, $head, ($i + 2));
            $__phel_261_262 = $binding_256;
            if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_261_262, \Phel\Lang\Keyword::create("while")))) {
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($verb_257), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($rest_260), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/break"))))) ?? []));
            } else {
              $__phel_263_264 = $__phel_261_262;
              if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_263_264, \Phel\Lang\Keyword::create("let")))) {
                return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($verb_257), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($rest_260))) ?? []));
              } else {
                $__phel_265_266 = $__phel_263_264;
                if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_265_266, \Phel\Lang\Keyword::create("when")))) {
                  return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/when"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($verb_257), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($rest_260))) ?? []));
                } else {
                  throw (new \InvalidArgumentException(("" . "This modifier is not supported in for loop: " . $verb_257)));
                }

              }

            }

          } else {
            $object_267 = (($head)[(($i + 2))] ?? null);
            $rest_268 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "for-builder"))($body, $head, ($i + 3));
            $value_sym_269 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"))();
            $__phel_270_271 = $verb_257;
            if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_270_271, \Phel\Lang\Keyword::create("range")))) {
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("foreach"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($binding_256), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("apply"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/range"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($object_267))) ?? []))))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($rest_268))) ?? []));
            } else {
              $__phel_272_273 = $__phel_270_271;
              if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_272_273, \Phel\Lang\Keyword::create("in")))) {
                return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("foreach"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($value_sym_269), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($object_267))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($binding_256), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($value_sym_269))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($rest_268))) ?? []))))) ?? []));
              } else {
                $__phel_274_275 = $__phel_272_273;
                if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_274_275, \Phel\Lang\Keyword::create("keys")))) {
                  $key_sym_276 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"))();
                  return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("foreach"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($key_sym_276), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($value_sym_269), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($object_267))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($binding_256), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($key_sym_276))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($rest_268))) ?? []))))) ?? []));
                } else {
                  $__phel_277_278 = $__phel_274_275;
                  if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_277_278, \Phel\Lang\Keyword::create("pairs")))) {
                    $key_sym_279 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"))();
                    return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("foreach"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($key_sym_279), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($value_sym_269), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($object_267))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($binding_256), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($key_sym_279), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($value_sym_269))) ?? []))))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($rest_268))) ?? []))))) ?? []));
                  } else {
                    throw (new \InvalidArgumentException(("" . "This verb is not supported in for loop " . $verb_257)));
                  }

                }

              }

            }

          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("private"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(for-builder body head i)\n```\n",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 864,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 898,
      \Phel\Lang\Keyword::create("column"), 113
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "for",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\for";

    public function __invoke($head, ...$body) {
      $body = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($body);
      $res_sym_280 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"))("res__");
      $acc_sym_281 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"))("acc__");
      $options_282 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "for-builder-options"))($head, 0, \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs());
      $swap_body_283 = ((\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Keyword::create("reduce"))($options_282))) ? (function() use($head,$body,$res_sym_280,$acc_sym_281,$options_282) {
        $__phel_284_290 = (\Phel\Lang\Keyword::create("reduce"))($options_282);
        $__phel_285_291 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_284_290);
        $__phel_286_292 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_284_290);
        $sym_293 = $__phel_285_291;
        $__phel_287_294 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_286_292);
        $__phel_288_295 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_286_292);
        $__phel_289_296 = $__phel_287_294;
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/swap!"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($res_sym_280), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("fn"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($sym_293))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))))) ?? []))))) ?? []));
      })() : (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/swap!"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($res_sym_280), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("fn"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($acc_sym_281))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/push"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($acc_sym_281), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))))) ?? []))))) ?? []))))) ?? [])));
      $init_297 = ((\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Keyword::create("reduce"))($options_282))) ? (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "second"))((\Phel\Lang\Keyword::create("reduce"))($options_282)) : \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      $loop_body_298 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "for-builder"))($swap_body_283, $head, 0);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($res_sym_280), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/var"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($init_297))) ?? []))))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($loop_body_298), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/deref"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($res_sym_280))) ?? []))))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(for head & body)\n```\nList comprehension. The head of the loop is a vector that contains a\n  sequence of bindings modifiers and options. A binding is a sequence of three\n  values `binding :verb expr`. Where `binding` is a binding as\n  in let and `:verb` is one of the following keywords:\n\n  * `:range` loop over a range by using the range function.\n  * `:in` loops over all values of a collection.\n  * `:keys` loops over all keys/indexes of a collection.\n  * `:pairs` loops over all key value pairs of a collection.\n\n  After each loop binding additional modifiers can be applied. Modifiers\n  have the form `:modifier argument`. The following modifiers are supported:\n\n  * `:while` breaks the loop if the expression is falsy.\n  * `:let` defines additional bindings.\n  * `:when` only evaluates the loop body if the condition is true.\n\n  Finally, additional options can be set:\n\n  * `:reduce [accumlator initial-value]` Instead of returning a list\n     it reduces the the values into `accumlator`. Initialially `accumlator`\n     is bound to `inital-value`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 900,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 937,
      \Phel\Lang\Keyword::create("column"), 26
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "dofor",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\dofor";

    public function __invoke($head, ...$body) {
      $body = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($body);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "for-builder"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? [])), $head, 0);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(dofor head & body)\n```\nRepeatedly executes body for side effects with bindings and modifiers as\n  provided by for. Returns nil.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 939,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 943,
      \Phel\Lang\Keyword::create("column"), 36
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "map",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\map";

    public function __invoke($f, ...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      $__phel_299_300 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_299_300, 0))) {
        throw (new \InvalidArgumentException("expected at least one indexed\ncollection in map"));
      } else {
        $__phel_301_302 = $__phel_299_300;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_301_302, 1))) {
          $__phel_303_306 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
          foreach (((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs) ?? []) as $__phel_305) {
            $x_307 = $__phel_305;
            (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_303_306, new class($f, $xs, $__phel_299_300, $__phel_301_302, $__phel_303_306, $__phel_305, $x_307) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\map";
              private $f;
              private $xs;
              private $__phel_299_300;
              private $__phel_301_302;
              private $__phel_303_306;
              private $__phel_305;
              private $x_307;

              public function __construct($f, $xs, $__phel_299_300, $__phel_301_302, $__phel_303_306, $__phel_305, $x_307) {
                $this->f = $f;
                $this->xs = $xs;
                $this->__phel_299_300 = $__phel_299_300;
                $this->__phel_301_302 = $__phel_301_302;
                $this->__phel_303_306 = $__phel_303_306;
                $this->__phel_305 = $__phel_305;
                $this->x_307 = $x_307;
              }

              public function __invoke($__phel_304) {
                $f = $this->f;
                $xs = $this->xs;
                $__phel_299_300 = $this->__phel_299_300;
                $__phel_301_302 = $this->__phel_301_302;
                $__phel_303_306 = $this->__phel_303_306;
                $__phel_305 = $this->__phel_305;
                $x_307 = $this->x_307;
                return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_304, ($f)($x_307));
              }
            });
          }
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_303_306);
        } else {
          $res_308 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
          $seq_309 = $xs;
          while (true) {
            if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "some?"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "nil?"), $seq_309))) {
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($res_308);
            } else {
              (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($res_308, ($f)(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "map"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"), $seq_309)) ?? [])));
              $__phel_310 = $res_308;
              $__phel_311 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "map"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"), $seq_309);
              $res_308 = $__phel_310;
              $seq_309 = $__phel_311;
              continue;

            }
            break;
          }
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(map f & xs)\n```\nReturns an array consisting of the result of applying `f` to all of the first items in each `xs`,\n   followed by applying `f` to all the second items in each `xs` until anyone of the `xs` is exhausted.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 949,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 963,
      \Phel\Lang\Keyword::create("column"), 41
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "map-indexed",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\map_indexed";

    public function __invoke($f, $xs) {
      $__phel_314_318 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (($xs ?? []) as $__phel_317 => $__phel_316) {
        $__phel_319_324 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$__phel_317, $__phel_316]);
        $__phel_320_325 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_319_324);
        $__phel_321_326 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_319_324);
        $k_327 = $__phel_320_325;
        $__phel_322_328 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_321_326);
        $__phel_323_329 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_321_326);
        $v_330 = $__phel_322_328;
        (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_314_318, new class($f, $xs, $__phel_314_318, $__phel_316, $__phel_317, $__phel_319_324, $__phel_320_325, $__phel_321_326, $k_327, $__phel_322_328, $__phel_323_329, $v_330) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\map_indexed";
          private $f;
          private $xs;
          private $__phel_314_318;
          private $__phel_316;
          private $__phel_317;
          private $__phel_319_324;
          private $__phel_320_325;
          private $__phel_321_326;
          private $k_327;
          private $__phel_322_328;
          private $__phel_323_329;
          private $v_330;

          public function __construct($f, $xs, $__phel_314_318, $__phel_316, $__phel_317, $__phel_319_324, $__phel_320_325, $__phel_321_326, $k_327, $__phel_322_328, $__phel_323_329, $v_330) {
            $this->f = $f;
            $this->xs = $xs;
            $this->__phel_314_318 = $__phel_314_318;
            $this->__phel_316 = $__phel_316;
            $this->__phel_317 = $__phel_317;
            $this->__phel_319_324 = $__phel_319_324;
            $this->__phel_320_325 = $__phel_320_325;
            $this->__phel_321_326 = $__phel_321_326;
            $this->k_327 = $k_327;
            $this->__phel_322_328 = $__phel_322_328;
            $this->__phel_323_329 = $__phel_323_329;
            $this->v_330 = $v_330;
          }

          public function __invoke($__phel_315) {
            $f = $this->f;
            $xs = $this->xs;
            $__phel_314_318 = $this->__phel_314_318;
            $__phel_316 = $this->__phel_316;
            $__phel_317 = $this->__phel_317;
            $__phel_319_324 = $this->__phel_319_324;
            $__phel_320_325 = $this->__phel_320_325;
            $__phel_321_326 = $this->__phel_321_326;
            $k_327 = $this->k_327;
            $__phel_322_328 = $this->__phel_322_328;
            $__phel_323_329 = $this->__phel_323_329;
            $v_330 = $this->v_330;
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_315, ($f)($k_327, $v_330));
          }
        });
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_314_318);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(map-indexed f xs)\n```\nApplies `f` to each element in `xs`. `f` is a two argument function. The first\n  argument is index of the element in the sequence and the second element is the\n  element itself.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 965,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 970,
      \Phel\Lang\Keyword::create("column"), 34
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "mapcat",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\mapcat";

    public function __invoke($f, ...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]), ...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "map"))($f, ...(($xs) ?? []))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(mapcat f & xs)\n```\nApplies `f` on all `xs` and concatenate the result.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 972,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 975,
      \Phel\Lang\Keyword::create("column"), 37
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "reduce",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\reduce";

    public function __invoke($f, $init, $xs) {
      $__phel_331_334 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))($init);
      foreach (($xs ?? []) as $__phel_333) {
        $x_335 = $__phel_333;
        (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_331_334, new class($f, $init, $xs, $__phel_331_334, $__phel_333, $x_335) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\reduce";
          private $f;
          private $init;
          private $xs;
          private $__phel_331_334;
          private $__phel_333;
          private $x_335;

          public function __construct($f, $init, $xs, $__phel_331_334, $__phel_333, $x_335) {
            $this->f = $f;
            $this->init = $init;
            $this->xs = $xs;
            $this->__phel_331_334 = $__phel_331_334;
            $this->__phel_333 = $__phel_333;
            $this->x_335 = $x_335;
          }

          public function __invoke($acc) {
            $f = $this->f;
            $init = $this->init;
            $xs = $this->xs;
            $__phel_331_334 = $this->__phel_331_334;
            $__phel_333 = $this->__phel_333;
            $x_335 = $this->x_335;
            return ($f)($acc, $x_335);
          }
        });
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_331_334);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(reduce f init xs)\n```\nTransforms an collection `xs` with a function `f` to produce a value by applying `f` to each element in order.\n  `f` is a function with two arguments. The first argument is the initial value and the second argument is\n  the element of `xs`. `f` returns a value that will be used as the initial value of the next call to `f`. The final\n  value of `f` is returned.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 977,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 984,
      \Phel\Lang\Keyword::create("column"), 15
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "reduce2",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\reduce2";

    public function __invoke($f, $__phel_336) {
      $__phel_337_341 = $__phel_336;
      $__phel_338_342 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_337_341);
      $__phel_339_343 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_337_341);
      $x_344 = $__phel_338_342;
      $__phel_340_345 = $__phel_339_343;
      $xs_346 = $__phel_340_345;
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce"))($f, $x_344, $xs_346);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(reduce2 f [x & xs])\n```\nThe 2-argument version of reduce that does not take a initialization value.\n  Instead the first argument of the list is used as initialization value.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 986,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 990,
      \Phel\Lang\Keyword::create("column"), 18
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "slice",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\slice";

    public function __invoke($xs, ...$__phel_347) {
      $__phel_347 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__phel_347);
      $__phel_348_355 = $__phel_347;
      $__phel_349_356 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_348_355);
      $__phel_350_357 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_348_355);
      $offset_358 = $__phel_349_356;
      $__phel_351_359 = $__phel_350_357;
      $__phel_352_360 = $__phel_351_359;
      $__phel_353_361 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_352_360);
      $__phel_354_362 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_352_360);
      $length_363 = $__phel_353_361;
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "php-array?"))($xs))) {
        return array_slice($xs, $offset_358, $length_363);
      } else {
        if (\Phel\Lang\Truthy::isTruthy(($xs instanceof \Phel\Lang\SliceInterface))) {
          return (function() use($xs,$__phel_347,$__phel_348_355,$__phel_349_356,$__phel_350_357,$offset_358,$__phel_351_359,$__phel_352_360,$__phel_353_361,$__phel_354_362,$length_363) {
            $target_364 = $xs;
            return $target_364->slice($offset_358, $length_363);
          })();
        } else {
          throw (new \InvalidArgumentException("Cannot slice"));
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(slice xs & [offset & [length]])\n```\nExtract a slice of `xs`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 992,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 998,
      \Phel\Lang\Keyword::create("column"), 63
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "get-in",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\get_in";

    public function __invoke($ds, $ks, ...$__phel_366) {
      $__phel_366 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__phel_366);
      $__phel_367_370 = $__phel_366;
      $__phel_368_371 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_367_370);
      $__phel_369_372 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_367_370);
      $opt_373 = $__phel_368_371;
      $res_374 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"), $ds, $ks);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "nil?"))($res_374))) {
        return $opt_373;
      } else {
        return $res_374;
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(get-in ds ks & [opt])\n```\nAccess a value in a nested data structure. Looks into the data structure via a sequence of keys.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1000,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1004,
      \Phel\Lang\Keyword::create("column"), 29
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "put-in",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\put_in";

    public function __invoke($ds, $__phel_375, $v) {
      $__phel_376_380 = $__phel_375;
      $__phel_377_381 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_376_380);
      $__phel_378_382 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_376_380);
      $k_383 = $__phel_377_381;
      $__phel_379_384 = $__phel_378_382;
      $ks_385 = $__phel_379_384;
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "nil?"))($ks_385))) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($ds, $k_383, $v);
      } else {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($ds, $k_383, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put-in"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($ds, $k_383, \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs()), $ks_385, $v));
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(put-in ds [k & ks] v)\n```\nPuts a value into a nested data structure.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1006,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1011,
      \Phel\Lang\Keyword::create("column"), 18
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "update",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\update";

    public function __invoke($ds, $k, $f, ...$args) {
      $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($ds, $k, ($f)((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($ds, $k), ...(($args) ?? [])));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(update ds k f & args)\n```\nUpdates a value in a datastructure by applying `f` to the current element and replacing it with the result of `f`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1013,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1016,
      \Phel\Lang\Keyword::create("column"), 39
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "update-in",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\update_in";

    public function __invoke($ds, $__phel_386, $f, ...$args) {
      $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
      $__phel_387_391 = $__phel_386;
      $__phel_388_392 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_387_391);
      $__phel_389_393 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_387_391);
      $k_394 = $__phel_388_392;
      $__phel_390_395 = $__phel_389_393;
      $ks_396 = $__phel_390_395;
      if (\Phel\Lang\Truthy::isTruthy($ks_396)) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($ds, $k_394, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "update-in"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($ds, $k_394, \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs()), $ks_396, $f, ...(($args) ?? [])));
      } else {
        $current_397 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($ds, $k_394);
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($ds, $k_394, ($f)($current_397, ...(($args) ?? [])));
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(update-in ds [k & ks] f & args)\n```\nUpdates a value into a nested data structure.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1018,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1024,
      \Phel\Lang\Keyword::create("column"), 42
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "drop",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\drop";

    public function __invoke($n, $xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "slice"))($xs, ((\Phel\Lang\Truthy::isTruthy(($n < 0))) ? 0 : $n));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(drop n xs)\n```\nDrops the first `n` elements of `xs`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1026,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1029,
      \Phel\Lang\Keyword::create("column"), 34
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "drop-while",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\drop_while";

    public function __invoke($pred, $xs) {
      $s_398 = $xs;
      while (true) {
        if (\Phel\Lang\Truthy::isTruthy((function() use($pred,$xs,$s_398) {
          $__phel_399_400 = $s_398;
          if (\Phel\Lang\Truthy::isTruthy($__phel_399_400)) {
            return ($pred)((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($s_398));
          } else {
            return $__phel_399_400;
          }

        })())) {
          $__phel_401 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($s_398);
          $s_398 = $__phel_401;
          continue;

        } else {
          if (\Phel\Lang\Truthy::isTruthy($s_398)) {
            return $s_398;
          } else {
            return \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]);
          }

        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(drop-while pred xs)\n```\nDrops all elements at the front `xs` where `(pred x)` is true.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1031,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1037,
      \Phel\Lang\Keyword::create("column"), 20
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "take",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\take";

    public function __invoke($n, $xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "slice"))($xs, 0, ((\Phel\Lang\Truthy::isTruthy(($n < 0))) ? 0 : $n));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(take n xs)\n```\nTakes the first `n` elements of `xs`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1039,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1042,
      \Phel\Lang\Keyword::create("column"), 36
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "take-last",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\take_last";

    public function __invoke($n, $xs) {
      if (\Phel\Lang\Truthy::isTruthy(($n <= 0))) {
        return \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]);
      } else {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "slice"))($xs, (-1 * $n));
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(take-last n xs)\n```\nTakes the last `n` elements of `xs`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1044,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1047,
      \Phel\Lang\Keyword::create("column"), 47
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "take-while",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\take_while";

    public function __invoke($pred, $xs) {
      $__phel_403_406 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (($xs ?? []) as $__phel_405) {
        $x_407 = $__phel_405;
        if (\Phel\Lang\Truthy::isTruthy(($pred)($x_407))) {
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_403_406, new class($pred, $xs, $__phel_403_406, $__phel_405, $x_407) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\take_while";
            private $pred;
            private $xs;
            private $__phel_403_406;
            private $__phel_405;
            private $x_407;

            public function __construct($pred, $xs, $__phel_403_406, $__phel_405, $x_407) {
              $this->pred = $pred;
              $this->xs = $xs;
              $this->__phel_403_406 = $__phel_403_406;
              $this->__phel_405 = $__phel_405;
              $this->x_407 = $x_407;
            }

            public function __invoke($__phel_404) {
              $pred = $this->pred;
              $xs = $this->xs;
              $__phel_403_406 = $this->__phel_403_406;
              $__phel_405 = $this->__phel_405;
              $x_407 = $this->x_407;
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_404, $x_407);
            }
          });
        } else {
          break;
        }

      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_403_406);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(take-while pred xs)\n```\nTakes alle elements at the front of `xs` where `(pred x)` is true.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1049,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1052,
      \Phel\Lang\Keyword::create("column"), 37
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "take-nth",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\take_nth";

    public function __invoke($n, $xs) {
      if (\Phel\Lang\Truthy::isTruthy(($n < 1))) {
        throw (new \InvalidArgumentException("First argument of 'take-nth must be greater then 0"));
      } else {

      }

      $__phel_408_412 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (($xs ?? []) as $__phel_411 => $__phel_410) {
        $__phel_413_418 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$__phel_411, $__phel_410]);
        $__phel_414_419 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_413_418);
        $__phel_415_420 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_413_418);
        $i_421 = $__phel_414_419;
        $__phel_416_422 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_415_420);
        $__phel_417_423 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_415_420);
        $x_424 = $__phel_416_422;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))(($i_421 % $n), 0))) {
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_408_412, new class($n, $xs, $__phel_408_412, $__phel_410, $__phel_411, $__phel_413_418, $__phel_414_419, $__phel_415_420, $i_421, $__phel_416_422, $__phel_417_423, $x_424) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\take_nth";
            private $n;
            private $xs;
            private $__phel_408_412;
            private $__phel_410;
            private $__phel_411;
            private $__phel_413_418;
            private $__phel_414_419;
            private $__phel_415_420;
            private $i_421;
            private $__phel_416_422;
            private $__phel_417_423;
            private $x_424;

            public function __construct($n, $xs, $__phel_408_412, $__phel_410, $__phel_411, $__phel_413_418, $__phel_414_419, $__phel_415_420, $i_421, $__phel_416_422, $__phel_417_423, $x_424) {
              $this->n = $n;
              $this->xs = $xs;
              $this->__phel_408_412 = $__phel_408_412;
              $this->__phel_410 = $__phel_410;
              $this->__phel_411 = $__phel_411;
              $this->__phel_413_418 = $__phel_413_418;
              $this->__phel_414_419 = $__phel_414_419;
              $this->__phel_415_420 = $__phel_415_420;
              $this->i_421 = $i_421;
              $this->__phel_416_422 = $__phel_416_422;
              $this->__phel_417_423 = $__phel_417_423;
              $this->x_424 = $x_424;
            }

            public function __invoke($__phel_409) {
              $n = $this->n;
              $xs = $this->xs;
              $__phel_408_412 = $this->__phel_408_412;
              $__phel_410 = $this->__phel_410;
              $__phel_411 = $this->__phel_411;
              $__phel_413_418 = $this->__phel_413_418;
              $__phel_414_419 = $this->__phel_414_419;
              $__phel_415_420 = $this->__phel_415_420;
              $i_421 = $this->i_421;
              $__phel_416_422 = $this->__phel_416_422;
              $__phel_417_423 = $this->__phel_417_423;
              $x_424 = $this->x_424;
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_409, $x_424);
            }
          });
        } else {

        }

      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_408_412);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(take-nth n xs)\n```\nReturns every nth item in `xs`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1054,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1061,
      \Phel\Lang\Keyword::create("column"), 7
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "filter",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\filter";

    public function __invoke($pred, $xs) {
      $__phel_425_428 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (($xs ?? []) as $__phel_427) {
        $x_429 = $__phel_427;
        if (\Phel\Lang\Truthy::isTruthy(($pred)($x_429))) {
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_425_428, new class($pred, $xs, $__phel_425_428, $__phel_427, $x_429) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\filter";
            private $pred;
            private $xs;
            private $__phel_425_428;
            private $__phel_427;
            private $x_429;

            public function __construct($pred, $xs, $__phel_425_428, $__phel_427, $x_429) {
              $this->pred = $pred;
              $this->xs = $xs;
              $this->__phel_425_428 = $__phel_425_428;
              $this->__phel_427 = $__phel_427;
              $this->x_429 = $x_429;
            }

            public function __invoke($__phel_426) {
              $pred = $this->pred;
              $xs = $this->xs;
              $__phel_425_428 = $this->__phel_425_428;
              $__phel_427 = $this->__phel_427;
              $x_429 = $this->x_429;
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_426, $x_429);
            }
          });
        } else {

        }

      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_425_428);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(filter pred xs)\n```\nReturns all elements of `xs` wher `(pred x)` is true.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1063,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1066,
      \Phel\Lang\Keyword::create("column"), 36
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "keep",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\keep";

    public function __invoke($pred, $xs) {
      $__phel_430_433 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (($xs ?? []) as $__phel_432) {
        $x_434 = $__phel_432;
        $res_435 = ($pred)($x_434);
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "not"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "nil?"))($res_435)))) {
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_430_433, new class($pred, $xs, $__phel_430_433, $__phel_432, $x_434, $res_435) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\keep";
            private $pred;
            private $xs;
            private $__phel_430_433;
            private $__phel_432;
            private $x_434;
            private $res_435;

            public function __construct($pred, $xs, $__phel_430_433, $__phel_432, $x_434, $res_435) {
              $this->pred = $pred;
              $this->xs = $xs;
              $this->__phel_430_433 = $__phel_430_433;
              $this->__phel_432 = $__phel_432;
              $this->x_434 = $x_434;
              $this->res_435 = $res_435;
            }

            public function __invoke($__phel_431) {
              $pred = $this->pred;
              $xs = $this->xs;
              $__phel_430_433 = $this->__phel_430_433;
              $__phel_432 = $this->__phel_432;
              $x_434 = $this->x_434;
              $res_435 = $this->res_435;
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_431, $res_435);
            }
          });
        } else {

        }

      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_430_433);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(keep pred xs)\n```\nReturns a list of non-nil results of `(pred x)`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1068,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1074,
      \Phel\Lang\Keyword::create("column"), 9
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "keep-indexed",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\keep_indexed";

    public function __invoke($pred, $xs) {
      $__phel_436_440 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (($xs ?? []) as $__phel_439 => $__phel_438) {
        $__phel_441_446 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$__phel_439, $__phel_438]);
        $__phel_442_447 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_441_446);
        $__phel_443_448 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_441_446);
        $k_449 = $__phel_442_447;
        $__phel_444_450 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_443_448);
        $__phel_445_451 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_443_448);
        $v_452 = $__phel_444_450;
        $res_453 = ($pred)($k_449, $v_452);
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "not"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "nil?"))($res_453)))) {
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_436_440, new class($pred, $xs, $__phel_436_440, $__phel_438, $__phel_439, $__phel_441_446, $__phel_442_447, $__phel_443_448, $k_449, $__phel_444_450, $__phel_445_451, $v_452, $res_453) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\keep_indexed";
            private $pred;
            private $xs;
            private $__phel_436_440;
            private $__phel_438;
            private $__phel_439;
            private $__phel_441_446;
            private $__phel_442_447;
            private $__phel_443_448;
            private $k_449;
            private $__phel_444_450;
            private $__phel_445_451;
            private $v_452;
            private $res_453;

            public function __construct($pred, $xs, $__phel_436_440, $__phel_438, $__phel_439, $__phel_441_446, $__phel_442_447, $__phel_443_448, $k_449, $__phel_444_450, $__phel_445_451, $v_452, $res_453) {
              $this->pred = $pred;
              $this->xs = $xs;
              $this->__phel_436_440 = $__phel_436_440;
              $this->__phel_438 = $__phel_438;
              $this->__phel_439 = $__phel_439;
              $this->__phel_441_446 = $__phel_441_446;
              $this->__phel_442_447 = $__phel_442_447;
              $this->__phel_443_448 = $__phel_443_448;
              $this->k_449 = $k_449;
              $this->__phel_444_450 = $__phel_444_450;
              $this->__phel_445_451 = $__phel_445_451;
              $this->v_452 = $v_452;
              $this->res_453 = $res_453;
            }

            public function __invoke($__phel_437) {
              $pred = $this->pred;
              $xs = $this->xs;
              $__phel_436_440 = $this->__phel_436_440;
              $__phel_438 = $this->__phel_438;
              $__phel_439 = $this->__phel_439;
              $__phel_441_446 = $this->__phel_441_446;
              $__phel_442_447 = $this->__phel_442_447;
              $__phel_443_448 = $this->__phel_443_448;
              $k_449 = $this->k_449;
              $__phel_444_450 = $this->__phel_444_450;
              $__phel_445_451 = $this->__phel_445_451;
              $v_452 = $this->v_452;
              $res_453 = $this->res_453;
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_437, $res_453);
            }
          });
        } else {

        }

      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_436_440);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(keep-indexed pred xs)\n```\nReturns a list of non-nil results of `(pred i x)`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1076,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1082,
      \Phel\Lang\Keyword::create("column"), 9
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "find",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\find";

    public function __invoke($pred, $xs) {
      $s_454 = $xs;
      while (true) {
        if (\Phel\Lang\Truthy::isTruthy($s_454)) {
          if (\Phel\Lang\Truthy::isTruthy(($pred)((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($s_454)))) {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($s_454);
          } else {
            $__phel_455 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($s_454);
            $s_454 = $__phel_455;
            continue;

          }

        } else {
          return null;
        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(find pred xs)\n```\nReturns the first item in `xs` where `(pred item)` evaluates to true.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1084,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1092,
      \Phel\Lang\Keyword::create("column"), 12
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "find-index",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\find_index";

    public function __invoke($pred, $xs) {
      $s_457 = $xs;
      $i_458 = 0;
      while (true) {
        if (\Phel\Lang\Truthy::isTruthy($s_457)) {
          if (\Phel\Lang\Truthy::isTruthy(($pred)((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($s_457)))) {
            return $i_458;
          } else {
            $__phel_459 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($s_457);
            $__phel_460 = ($i_458 + 1);
            $s_457 = $__phel_459;
            $i_458 = $__phel_460;
            continue;

          }

        } else {
          return null;
        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(find-index pred xs)\n```\nReturns the first item in `xs` where `(pred index item)` evaluates to true.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1094,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1103,
      \Phel\Lang\Keyword::create("column"), 12
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "distinct",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\distinct";

    public function __invoke($xs) {
      $seen_463 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))(\Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs());
      $ret_464 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (($xs ?? []) as $__phel_465) {
        $x_466 = $__phel_465;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($seen_463, $x_466))) {

        } else {
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($seen_463, $x_466, true);
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($ret_464, $x_466);
        }

      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($ret_464);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(distinct xs)\n```\nReturns an vector with duplicated values removed in `xs`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1105,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1114,
      \Phel\Lang\Keyword::create("column"), 22
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "reverse",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\reverse";

    public function __invoke($xs) {
      $__phel_467_470 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "range"))(...((\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs) - 1), -1, -1])) ?? [])) ?? []) as $i) {
        (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_467_470, new class($xs, $__phel_467_470, $i) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\reverse";
          private $xs;
          private $__phel_467_470;
          private $i;

          public function __construct($xs, $__phel_467_470, $i) {
            $this->xs = $xs;
            $this->__phel_467_470 = $__phel_467_470;
            $this->i = $i;
          }

          public function __invoke($ret) {
            $xs = $this->xs;
            $__phel_467_470 = $this->__phel_467_470;
            $i = $this->i;
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($ret, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($xs, $i));
          }
        });
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_467_470);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(reverse xs)\n```\nReverses the order of the elements in the given sequence.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1116,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1121,
      \Phel\Lang\Keyword::create("column"), 27
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "interleave",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\interleave";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      $i_472 = 0;
      $res_473 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]);
      while (true) {
        $nths_474 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "map"))(new class($xs, $i_472, $res_473) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\interleave.nths";
          private $xs;
          private $i_472;
          private $res_473;

          public function __construct($xs, $i_472, $res_473) {
            $this->xs = $xs;
            $this->i_472 = $i_472;
            $this->res_473 = $res_473;
          }

          public function __invoke($__short_fn_1_471) {
            $xs = $this->xs;
            $i_472 = $this->i_472;
            $res_473 = $this->res_473;
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($__short_fn_1_471, $i_472);
          }
        }, $xs);
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "some?"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "nil?"), $nths_474))) {
          return $res_473;
        } else {
          $__phel_475 = ($i_472 + 1);
          $__phel_476 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))($res_473, $nths_474);
          $i_472 = $__phel_475;
          $res_473 = $__phel_476;
          continue;

        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(interleave & xs)\n```\nReturns a vector with the first items of each col, than the second items etc.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1123,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1131,
      \Phel\Lang\Keyword::create("column"), 49
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "interpose",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\interpose";

    public function __invoke($sep, $xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))((function() use($sep,$xs) {
        $__phel_479_483 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([])));
        foreach (($xs ?? []) as $__phel_482 => $__phel_481) {
          $__phel_484_489 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$__phel_482, $__phel_481]);
          $__phel_485_490 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_484_489);
          $__phel_486_491 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_484_489);
          $k_492 = $__phel_485_490;
          $__phel_487_493 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_486_491);
          $__phel_488_494 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_486_491);
          $v_495 = $__phel_487_493;
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_479_483, new class($sep, $xs, $__phel_479_483, $__phel_481, $__phel_482, $__phel_484_489, $__phel_485_490, $__phel_486_491, $k_492, $__phel_487_493, $__phel_488_494, $v_495) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\interpose";
            private $sep;
            private $xs;
            private $__phel_479_483;
            private $__phel_481;
            private $__phel_482;
            private $__phel_484_489;
            private $__phel_485_490;
            private $__phel_486_491;
            private $k_492;
            private $__phel_487_493;
            private $__phel_488_494;
            private $v_495;

            public function __construct($sep, $xs, $__phel_479_483, $__phel_481, $__phel_482, $__phel_484_489, $__phel_485_490, $__phel_486_491, $k_492, $__phel_487_493, $__phel_488_494, $v_495) {
              $this->sep = $sep;
              $this->xs = $xs;
              $this->__phel_479_483 = $__phel_479_483;
              $this->__phel_481 = $__phel_481;
              $this->__phel_482 = $__phel_482;
              $this->__phel_484_489 = $__phel_484_489;
              $this->__phel_485_490 = $__phel_485_490;
              $this->__phel_486_491 = $__phel_486_491;
              $this->k_492 = $k_492;
              $this->__phel_487_493 = $__phel_487_493;
              $this->__phel_488_494 = $__phel_488_494;
              $this->v_495 = $v_495;
            }

            public function __invoke($res) {
              $sep = $this->sep;
              $xs = $this->xs;
              $__phel_479_483 = $this->__phel_479_483;
              $__phel_481 = $this->__phel_481;
              $__phel_482 = $this->__phel_482;
              $__phel_484_489 = $this->__phel_484_489;
              $__phel_485_490 = $this->__phel_485_490;
              $__phel_486_491 = $this->__phel_486_491;
              $k_492 = $this->k_492;
              $__phel_487_493 = $this->__phel_487_493;
              $__phel_488_494 = $this->__phel_488_494;
              $v_495 = $this->v_495;
              if (\Phel\Lang\Truthy::isTruthy(($k_492 > 0))) {
                (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($res, $sep, $v_495);
              } else {

              }

              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($res, $v_495);
            }
          });
        }
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_479_483);
      })());
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(interpose sep xs)\n```\nReturns an vector of elements separated by `sep`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1133,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1141,
      \Phel\Lang\Keyword::create("column"), 21
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "frequencies",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\frequencies";

    public function __invoke($xs) {
      $__phel_496_499 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs());
      foreach (($xs ?? []) as $__phel_498) {
        $x_500 = $__phel_498;
        (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_496_499, new class($xs, $__phel_496_499, $__phel_498, $x_500) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\frequencies";
          private $xs;
          private $__phel_496_499;
          private $__phel_498;
          private $x_500;

          public function __construct($xs, $__phel_496_499, $__phel_498, $x_500) {
            $this->xs = $xs;
            $this->__phel_496_499 = $__phel_496_499;
            $this->__phel_498 = $__phel_498;
            $this->x_500 = $x_500;
          }

          public function __invoke($res) {
            $xs = $this->xs;
            $__phel_496_499 = $this->__phel_496_499;
            $__phel_498 = $this->__phel_498;
            $x_500 = $this->x_500;
            $n_501 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($res, $x_500, 0);
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($res, $x_500, (1 + $n_501));
          }
        });
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_496_499);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(frequencies xs)\n```\nReturns a map from distinct items in `xs` to the number of times they appear.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1143,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1149,
      \Phel\Lang\Keyword::create("column"), 32
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "keys",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\keys";

    public function __invoke($xs) {
      $__phel_502_506 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (($xs ?? []) as $__phel_505 => $__phel_504) {
        $k_507 = $__phel_505;
        (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_502_506, new class($xs, $__phel_502_506, $__phel_504, $__phel_505, $k_507) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\keys";
          private $xs;
          private $__phel_502_506;
          private $__phel_504;
          private $__phel_505;
          private $k_507;

          public function __construct($xs, $__phel_502_506, $__phel_504, $__phel_505, $k_507) {
            $this->xs = $xs;
            $this->__phel_502_506 = $__phel_502_506;
            $this->__phel_504 = $__phel_504;
            $this->__phel_505 = $__phel_505;
            $this->k_507 = $k_507;
          }

          public function __invoke($__phel_503) {
            $xs = $this->xs;
            $__phel_502_506 = $this->__phel_502_506;
            $__phel_504 = $this->__phel_504;
            $__phel_505 = $this->__phel_505;
            $k_507 = $this->k_507;
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_503, $k_507);
          }
        });
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_502_506);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(keys xs)\n```\nGets the keys of an associative data structure.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1151,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1154,
      \Phel\Lang\Keyword::create("column"), 23
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "values",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\values";

    public function __invoke($xs) {
      $__phel_508_511 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (($xs ?? []) as $__phel_510) {
        $x_512 = $__phel_510;
        (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_508_511, new class($xs, $__phel_508_511, $__phel_510, $x_512) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\values";
          private $xs;
          private $__phel_508_511;
          private $__phel_510;
          private $x_512;

          public function __construct($xs, $__phel_508_511, $__phel_510, $x_512) {
            $this->xs = $xs;
            $this->__phel_508_511 = $__phel_508_511;
            $this->__phel_510 = $__phel_510;
            $this->x_512 = $x_512;
          }

          public function __invoke($__phel_509) {
            $xs = $this->xs;
            $__phel_508_511 = $this->__phel_508_511;
            $__phel_510 = $this->__phel_510;
            $x_512 = $this->x_512;
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_509, $x_512);
          }
        });
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_508_511);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(values xs)\n```\nGets the values of an associative data structure.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1156,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1159,
      \Phel\Lang\Keyword::create("column"), 21
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "pairs",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\pairs";

    public function __invoke($xs) {
      $__phel_513_517 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (($xs ?? []) as $__phel_516 => $__phel_515) {
        $p_518 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$__phel_516, $__phel_515]);
        (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_513_517, new class($xs, $__phel_513_517, $__phel_515, $__phel_516, $p_518) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\pairs";
          private $xs;
          private $__phel_513_517;
          private $__phel_515;
          private $__phel_516;
          private $p_518;

          public function __construct($xs, $__phel_513_517, $__phel_515, $__phel_516, $p_518) {
            $this->xs = $xs;
            $this->__phel_513_517 = $__phel_513_517;
            $this->__phel_515 = $__phel_515;
            $this->__phel_516 = $__phel_516;
            $this->p_518 = $p_518;
          }

          public function __invoke($__phel_514) {
            $xs = $this->xs;
            $__phel_513_517 = $this->__phel_513_517;
            $__phel_515 = $this->__phel_515;
            $__phel_516 = $this->__phel_516;
            $p_518 = $this->p_518;
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_514, $p_518);
          }
        });
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_513_517);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(pairs xs)\n```\nGets the pairs of an associative data structure.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1161,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1164,
      \Phel\Lang\Keyword::create("column"), 24
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "kvs",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\kvs";

    public function __invoke($xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))((function() use($xs) {
        $__phel_519_523 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([])));
        foreach (($xs ?? []) as $__phel_522 => $__phel_521) {
          $__phel_524_529 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$__phel_522, $__phel_521]);
          $__phel_525_530 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_524_529);
          $__phel_526_531 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_524_529);
          $k_532 = $__phel_525_530;
          $__phel_527_533 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_526_531);
          $__phel_528_534 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_526_531);
          $v_535 = $__phel_527_533;
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_519_523, new class($xs, $__phel_519_523, $__phel_521, $__phel_522, $__phel_524_529, $__phel_525_530, $__phel_526_531, $k_532, $__phel_527_533, $__phel_528_534, $v_535) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\kvs";
            private $xs;
            private $__phel_519_523;
            private $__phel_521;
            private $__phel_522;
            private $__phel_524_529;
            private $__phel_525_530;
            private $__phel_526_531;
            private $k_532;
            private $__phel_527_533;
            private $__phel_528_534;
            private $v_535;

            public function __construct($xs, $__phel_519_523, $__phel_521, $__phel_522, $__phel_524_529, $__phel_525_530, $__phel_526_531, $k_532, $__phel_527_533, $__phel_528_534, $v_535) {
              $this->xs = $xs;
              $this->__phel_519_523 = $__phel_519_523;
              $this->__phel_521 = $__phel_521;
              $this->__phel_522 = $__phel_522;
              $this->__phel_524_529 = $__phel_524_529;
              $this->__phel_525_530 = $__phel_525_530;
              $this->__phel_526_531 = $__phel_526_531;
              $this->k_532 = $k_532;
              $this->__phel_527_533 = $__phel_527_533;
              $this->__phel_528_534 = $__phel_528_534;
              $this->v_535 = $v_535;
            }

            public function __invoke($res) {
              $xs = $this->xs;
              $__phel_519_523 = $this->__phel_519_523;
              $__phel_521 = $this->__phel_521;
              $__phel_522 = $this->__phel_522;
              $__phel_524_529 = $this->__phel_524_529;
              $__phel_525_530 = $this->__phel_525_530;
              $__phel_526_531 = $this->__phel_526_531;
              $k_532 = $this->k_532;
              $__phel_527_533 = $this->__phel_527_533;
              $__phel_528_534 = $this->__phel_528_534;
              $v_535 = $this->v_535;
              (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($res, $k_532);
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($res, $v_535);
            }
          });
        }
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_519_523);
      })());
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(kvs xs)\n```\nReturns an vector of key value pairs like `[k1 v1 k2 v2 k3 v3 ...]`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1166,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1173,
      \Phel\Lang\Keyword::create("column"), 20
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "to-php-array",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\to_php_array";

    public function __invoke($xs) {
      return array(...(($xs) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(to-php-array xs)\n```\nCreate a PHP Array from a sequential data structure.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1175,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1178,
      \Phel\Lang\Keyword::create("column"), 23
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "php-array-to-map",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_array_to_map";

    public function __invoke($arr) {
      $res_536 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))(\Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs());
      foreach (($arr ?? []) as $k => $v) {
        (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($res_536, $k, $v);
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($res_536);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(php-array-to-map arr)\n```\nConverts a PHP Array to a map.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1180,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1186,
      \Phel\Lang\Keyword::create("column"), 22
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "sort",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\sort";

    public function __invoke($xs, ...$__phel_537) {
      $__phel_537 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__phel_537);
      $__phel_538_541 = $__phel_537;
      $__phel_539_542 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_538_541);
      $__phel_540_543 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_538_541);
      $comp_544 = $__phel_539_542;
      $php_array_545 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "to-php-array"))($xs);
      usort($php_array_545, (function() use($xs,$__phel_537,$__phel_538_541,$__phel_539_542,$__phel_540_543,$comp_544,$php_array_545) {
        $__phel_546_547 = $comp_544;
        if (\Phel\Lang\Truthy::isTruthy($__phel_546_547)) {
          return $__phel_546_547;
        } else {
          return \Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "compare");
        }

      })());
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(($php_array_545) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(sort xs & [comp])\n```\nReturns a sorted vector. If no comparator is supplied compare is used.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1188,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1193,
      \Phel\Lang\Keyword::create("column"), 30
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "sort-by",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\sort_by";

    public function __invoke($keyfn, $xs, ...$__phel_550) {
      $__phel_550 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__phel_550);
      $__phel_551_554 = $__phel_550;
      $__phel_552_555 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_551_554);
      $__phel_553_556 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_551_554);
      $comp_557 = $__phel_552_555;
      $php_array_558 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "to-php-array"))($xs);
      $cmp_559 = (function() use($keyfn,$xs,$__phel_550,$__phel_551_554,$__phel_552_555,$__phel_553_556,$comp_557,$php_array_558) {
        $__phel_560_561 = $comp_557;
        if (\Phel\Lang\Truthy::isTruthy($__phel_560_561)) {
          return $__phel_560_561;
        } else {
          return \Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "compare");
        }

      })();
      usort($php_array_558, new class($keyfn, $xs, $__phel_550, $__phel_551_554, $__phel_552_555, $__phel_553_556, $comp_557, $php_array_558, $cmp_559) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\sort_by";
        private $keyfn;
        private $xs;
        private $__phel_550;
        private $__phel_551_554;
        private $__phel_552_555;
        private $__phel_553_556;
        private $comp_557;
        private $php_array_558;
        private $cmp_559;

        public function __construct($keyfn, $xs, $__phel_550, $__phel_551_554, $__phel_552_555, $__phel_553_556, $comp_557, $php_array_558, $cmp_559) {
          $this->keyfn = $keyfn;
          $this->xs = $xs;
          $this->__phel_550 = $__phel_550;
          $this->__phel_551_554 = $__phel_551_554;
          $this->__phel_552_555 = $__phel_552_555;
          $this->__phel_553_556 = $__phel_553_556;
          $this->comp_557 = $comp_557;
          $this->php_array_558 = $php_array_558;
          $this->cmp_559 = $cmp_559;
        }

        public function __invoke($__short_fn_1_548, $__short_fn_2_549) {
          $keyfn = $this->keyfn;
          $xs = $this->xs;
          $__phel_550 = $this->__phel_550;
          $__phel_551_554 = $this->__phel_551_554;
          $__phel_552_555 = $this->__phel_552_555;
          $__phel_553_556 = $this->__phel_553_556;
          $comp_557 = $this->comp_557;
          $php_array_558 = $this->php_array_558;
          $cmp_559 = $this->cmp_559;
          return ($cmp_559)(($keyfn)($__short_fn_1_548), ($keyfn)($__short_fn_2_549));
        }
      });
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(($php_array_558) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(sort-by keyfn xs & [comp])\n```\nReturns a sorted vector where the sort order is determined by comparing\n  `(keyfn item)`. If no comparator is supplied compare is used.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1195,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1202,
      \Phel\Lang\Keyword::create("column"), 30
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "shuffle",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\shuffle";

    public function __invoke($xs) {
      $php_array_562 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "to-php-array"))($xs);
      shuffle($php_array_562);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(($php_array_562) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(shuffle xs)\n```\nReturns a random permutation of xs.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1204,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1209,
      \Phel\Lang\Keyword::create("column"), 30
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "repeat",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\repeat";

    public function __invoke($n, $x) {
      $__phel_563_566 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      foreach (((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "range"))(...((\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$n])) ?? [])) ?? []) as $i) {
        (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_563_566, new class($n, $x, $__phel_563_566, $i) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\repeat";
          private $n;
          private $x;
          private $__phel_563_566;
          private $i;

          public function __construct($n, $x, $__phel_563_566, $i) {
            $this->n = $n;
            $this->x = $x;
            $this->__phel_563_566 = $__phel_563_566;
            $this->i = $i;
          }

          public function __invoke($__phel_564) {
            $n = $this->n;
            $x = $this->x;
            $__phel_563_566 = $this->__phel_563_566;
            $i = $this->i;
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_564, $x);
          }
        });
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_563_566);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(repeat n x)\n```\nReturns a vector of length n where every element is x.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1211,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1214,
      \Phel\Lang\Keyword::create("column"), 25
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "group-by",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\group_by";

    public function __invoke($f, $xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))((function() use($f,$xs) {
        $__phel_567_570 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))(\Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs()));
        foreach (($xs ?? []) as $__phel_569) {
          $x_571 = $__phel_569;
          $k_572 = ($f)($x_571);
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_567_570, new class($f, $xs, $__phel_567_570, $__phel_569, $x_571, $k_572) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\group_by";
            private $f;
            private $xs;
            private $__phel_567_570;
            private $__phel_569;
            private $x_571;
            private $k_572;

            public function __construct($f, $xs, $__phel_567_570, $__phel_569, $x_571, $k_572) {
              $this->f = $f;
              $this->xs = $xs;
              $this->__phel_567_570 = $__phel_567_570;
              $this->__phel_569 = $__phel_569;
              $this->x_571 = $x_571;
              $this->k_572 = $k_572;
            }

            public function __invoke($res) {
              $f = $this->f;
              $xs = $this->xs;
              $__phel_567_570 = $this->__phel_567_570;
              $__phel_569 = $this->__phel_569;
              $x_571 = $this->x_571;
              $k_572 = $this->k_572;
              if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($res, $k_572))) {

              } else {
                (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($res, $k_572, \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
              }

              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "update-in"))($res, \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$k_572]), \Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"), $x_571);
            }
          });
        }
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_567_570);
      })());
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(group-by f xs)\n```\nReturns a map of the elements of xs keyed by the result of\n  f on each element.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1216,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1226,
      \Phel\Lang\Keyword::create("column"), 35
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "zipcoll",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\zipcoll";

    public function __invoke($a, $b) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "hash-map"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "interleave"))($a, $b)) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(zipcoll a b)\n```\nCreates a map from two sequential data structures. Return a new map.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1228,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1231,
      \Phel\Lang\Keyword::create("column"), 36
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "merge",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\merge";

    public function __invoke(...$maps) {
      $maps = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($maps);
      $__phel_573_578 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs());
      foreach (($maps ?? []) as $__phel_577) {
        $map_579 = $__phel_577;
        foreach (($map_579 ?? []) as $__phel_576 => $__phel_575) {
          $__phel_580_585 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$__phel_576, $__phel_575]);
          $__phel_581_586 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_580_585);
          $__phel_582_587 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_580_585);
          $k_588 = $__phel_581_586;
          $__phel_583_589 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_582_587);
          $__phel_584_590 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_582_587);
          $v_591 = $__phel_583_589;
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_573_578, new class($maps, $__phel_573_578, $__phel_577, $map_579, $__phel_575, $__phel_576, $__phel_580_585, $__phel_581_586, $__phel_582_587, $k_588, $__phel_583_589, $__phel_584_590, $v_591) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\merge";
            private $maps;
            private $__phel_573_578;
            private $__phel_577;
            private $map_579;
            private $__phel_575;
            private $__phel_576;
            private $__phel_580_585;
            private $__phel_581_586;
            private $__phel_582_587;
            private $k_588;
            private $__phel_583_589;
            private $__phel_584_590;
            private $v_591;

            public function __construct($maps, $__phel_573_578, $__phel_577, $map_579, $__phel_575, $__phel_576, $__phel_580_585, $__phel_581_586, $__phel_582_587, $k_588, $__phel_583_589, $__phel_584_590, $v_591) {
              $this->maps = $maps;
              $this->__phel_573_578 = $__phel_573_578;
              $this->__phel_577 = $__phel_577;
              $this->map_579 = $map_579;
              $this->__phel_575 = $__phel_575;
              $this->__phel_576 = $__phel_576;
              $this->__phel_580_585 = $__phel_580_585;
              $this->__phel_581_586 = $__phel_581_586;
              $this->__phel_582_587 = $__phel_582_587;
              $this->k_588 = $k_588;
              $this->__phel_583_589 = $__phel_583_589;
              $this->__phel_584_590 = $__phel_584_590;
              $this->v_591 = $v_591;
            }

            public function __invoke($res) {
              $maps = $this->maps;
              $__phel_573_578 = $this->__phel_573_578;
              $__phel_577 = $this->__phel_577;
              $map_579 = $this->map_579;
              $__phel_575 = $this->__phel_575;
              $__phel_576 = $this->__phel_576;
              $__phel_580_585 = $this->__phel_580_585;
              $__phel_581_586 = $this->__phel_581_586;
              $__phel_582_587 = $this->__phel_582_587;
              $k_588 = $this->k_588;
              $__phel_583_589 = $this->__phel_583_589;
              $__phel_584_590 = $this->__phel_584_590;
              $v_591 = $this->v_591;
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($res, $k_588, $v_591);
            }
          });
        }
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_573_578);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(merge & maps)\n```\nMerges multiple maps into one new map. If a key appears in more than one\n  collection, then later values replace any previous ones.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1233,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1240,
      \Phel\Lang\Keyword::create("column"), 19
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "invert",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\invert";

    public function __invoke($map) {
      $__phel_592_596 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs());
      foreach (($map ?? []) as $__phel_595 => $__phel_594) {
        $__phel_597_602 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$__phel_595, $__phel_594]);
        $__phel_598_603 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_597_602);
        $__phel_599_604 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_597_602);
        $k_605 = $__phel_598_603;
        $__phel_600_606 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_599_604);
        $__phel_601_607 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_599_604);
        $v_608 = $__phel_600_606;
        (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_592_596, new class($map, $__phel_592_596, $__phel_594, $__phel_595, $__phel_597_602, $__phel_598_603, $__phel_599_604, $k_605, $__phel_600_606, $__phel_601_607, $v_608) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\invert";
          private $map;
          private $__phel_592_596;
          private $__phel_594;
          private $__phel_595;
          private $__phel_597_602;
          private $__phel_598_603;
          private $__phel_599_604;
          private $k_605;
          private $__phel_600_606;
          private $__phel_601_607;
          private $v_608;

          public function __construct($map, $__phel_592_596, $__phel_594, $__phel_595, $__phel_597_602, $__phel_598_603, $__phel_599_604, $k_605, $__phel_600_606, $__phel_601_607, $v_608) {
            $this->map = $map;
            $this->__phel_592_596 = $__phel_592_596;
            $this->__phel_594 = $__phel_594;
            $this->__phel_595 = $__phel_595;
            $this->__phel_597_602 = $__phel_597_602;
            $this->__phel_598_603 = $__phel_598_603;
            $this->__phel_599_604 = $__phel_599_604;
            $this->k_605 = $k_605;
            $this->__phel_600_606 = $__phel_600_606;
            $this->__phel_601_607 = $__phel_601_607;
            $this->v_608 = $v_608;
          }

          public function __invoke($res) {
            $map = $this->map;
            $__phel_592_596 = $this->__phel_592_596;
            $__phel_594 = $this->__phel_594;
            $__phel_595 = $this->__phel_595;
            $__phel_597_602 = $this->__phel_597_602;
            $__phel_598_603 = $this->__phel_598_603;
            $__phel_599_604 = $this->__phel_599_604;
            $k_605 = $this->k_605;
            $__phel_600_606 = $this->__phel_600_606;
            $__phel_601_607 = $this->__phel_601_607;
            $v_608 = $this->v_608;
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "put"))($res, $v_608, $k_605);
          }
        });
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_592_596);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(invert map)\n```\nReturns a new map where the keys and values are swapped. If map has\n  duplicated values, some keys will be ignored.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1242,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1248,
      \Phel\Lang\Keyword::create("column"), 19
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "split-at",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\split_at";

    public function __invoke($n, $xs) {
      return \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "take"))($n, $xs), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "drop"))($n, $xs)]);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(split-at n xs)\n```\nReturns a vector of `[(take n coll) (drop n coll)]`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1250,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1253,
      \Phel\Lang\Keyword::create("column"), 28
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "split-with",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\split_with";

    public function __invoke($f, $xs) {
      return \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "take-while"))($f, $xs), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "drop-while"))($f, $xs)]);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(split-with f xs)\n```\nReturns a vector of `[(take-while pred coll) (drop-while pred coll)]`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1255,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1258,
      \Phel\Lang\Keyword::create("column"), 40
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "partition",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\partition";

    public function __invoke($n, $xs) {
      if (\Phel\Lang\Truthy::isTruthy(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs) <= $n))) {
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs), 0))) {
          return \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]);
        } else {
          return \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$xs]);
        }

      } else {
        $res_609 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
        $xs_610 = $xs;
        while (true) {
          $__phel_611_616 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "split-at"))($n, $xs_610);
          $__phel_612_617 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_611_616);
          $__phel_613_618 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_611_616);
          $a_619 = $__phel_612_617;
          $__phel_614_620 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_613_618);
          $__phel_615_621 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_613_618);
          $b_622 = $__phel_614_620;
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($res_609, $a_619);
          if (\Phel\Lang\Truthy::isTruthy(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($b_622) >= $n))) {
            $__phel_623 = $b_622;
            $xs_610 = $__phel_623;
            continue;

          } else {
            if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($b_622), 0))) {
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($res_609);
            } else {
              (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($res_609, $b_622);
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($res_609);
            }

          }
          break;
        }
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(partition n xs)\n```\nPartition an indexed data structure into vectors of maximum size n. Returns a new vector.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1260,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1275,
      \Phel\Lang\Keyword::create("column"), 40
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "union",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\union";

    public function __invoke(...$sets) {
      $sets = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($sets);
      $target_625 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "set"))());
      foreach (($sets ?? []) as $s) {
        foreach (($s ?? []) as $v) {
          (function() use($sets,$target_625,$s,$v) {
            $target_626 = $target_625;
            return $target_626->add($v);
          })();
        }
      }
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($target_625);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(union & sets)\n```\nUnion multiple sets into a new one.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1281,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1288,
      \Phel\Lang\Keyword::create("column"), 25
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "intersection-pair",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\intersection_pair";

    public function __invoke($s1, $s2) {
      while (true) {
        if (\Phel\Lang\Truthy::isTruthy(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($s2) < (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($s1)))) {
          $__phel_629 = $s2;
          $__phel_630 = $s1;
          $s1 = $__phel_629;
          $s2 = $__phel_630;
          continue;

        } else {
          $result_628 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))($s1);
          foreach (($s1 ?? []) as $item) {
            if (\Phel\Lang\Truthy::isTruthy((function() use($s1,$s2,$result_628,$item) {
              $target_631 = $s2;
              return $target_631->contains($item);
            })())) {

            } else {
              (function() use($s1,$s2,$result_628,$item) {
                $target_632 = $result_628;
                return $target_632->remove($item);
              })();
            }

          }
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($result_628);
        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("private"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(intersection-pair s1 s2)\n```\n",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1290,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1298,
      \Phel\Lang\Keyword::create("column"), 28
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "intersection",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\intersection";

    public function __invoke($set, ...$sets) {
      $sets = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($sets);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "intersection-pair"), $set, $sets);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(intersection set & sets)\n```\nIntersect multiple sets into a new one.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1300,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1303,
      \Phel\Lang\Keyword::create("column"), 38
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "difference-pair",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\difference_pair";

    public function __invoke($s1, $s2) {
      if (\Phel\Lang\Truthy::isTruthy(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($s1) < (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($s2)))) {
        $result_637 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))($s1);
        foreach (($s1 ?? []) as $item) {
          if (\Phel\Lang\Truthy::isTruthy((function() use($s1,$s2,$result_637,$item) {
            $target_639 = $s2;
            return $target_639->contains($item);
          })())) {
            (function() use($s1,$s2,$result_637,$item) {
              $target_640 = $result_637;
              return $target_640->remove($item);
            })();
          } else {

          }

        }
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($result_637);
      } else {
        $result_638 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))($s1);
        foreach (($s2 ?? []) as $item) {
          (function() use($s1,$s2,$result_638,$item) {
            $target_641 = $result_638;
            return $target_641->remove($item);
          })();
        }
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($result_638);
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(difference-pair s1 s2)\n```\n",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1305,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1317,
      \Phel\Lang\Keyword::create("column"), 28
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "difference",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\difference";

    public function __invoke($set, ...$sets) {
      $sets = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($sets);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "difference-pair"), $set, $sets);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(difference set & sets)\n```\nDifference between multiple sets into a new one.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1319,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1322,
      \Phel\Lang\Keyword::create("column"), 36
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "symmetric-difference",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\symmetric_difference";

    public function __invoke($set, ...$sets) {
      $sets = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($sets);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce"))(new class($set, $sets) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\symmetric_difference";
        private $set;
        private $sets;

        public function __construct($set, $sets) {
          $this->set = $set;
          $this->sets = $sets;
        }

        public function __invoke($__short_fn_1_645, $__short_fn_2_646) {
          $set = $this->set;
          $sets = $this->sets;
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "union"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "difference"))($__short_fn_1_645, $__short_fn_2_646), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "difference"))($__short_fn_2_646, $__short_fn_1_645));
        }
      }, $set, $sets);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(symmetric-difference set & sets)\n```\nSymmetric difference between multiple sets into a new one.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1324,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1327,
      \Phel\Lang\Keyword::create("column"), 67
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "identity",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\identity";

    public function __invoke($x) {
      return $x;
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(identity x)\n```\nReturns its argument.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1333,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1336,
      \Phel\Lang\Keyword::create("column"), 4
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "comp",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\comp";

    public function __invoke(...$fs) {
      $fs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($fs);
      $__phel_648_649 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($fs);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_648_649, 0))) {
        return \Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "identity");
      } else {
        $__phel_650_651 = $__phel_648_649;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_650_651, 1))) {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($fs);
        } else {
          $__phel_652_653 = $__phel_650_651;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_652_653, 2))) {
            return new class($fs, $__phel_648_649, $__phel_650_651, $__phel_652_653) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\comp";
              private $fs;
              private $__phel_648_649;
              private $__phel_650_651;
              private $__phel_652_653;

              public function __construct($fs, $__phel_648_649, $__phel_650_651, $__phel_652_653) {
                $this->fs = $fs;
                $this->__phel_648_649 = $__phel_648_649;
                $this->__phel_650_651 = $__phel_650_651;
                $this->__phel_652_653 = $__phel_652_653;
              }

              public function __invoke(...$__short_fn_rest_647) {
                $fs = $this->fs;
                $__phel_648_649 = $this->__phel_648_649;
                $__phel_650_651 = $this->__phel_650_651;
                $__phel_652_653 = $this->__phel_652_653;
                $__short_fn_rest_647 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__short_fn_rest_647);
                return ((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($fs))(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "second"))($fs))(...(($__short_fn_rest_647) ?? [])));
              }
            };
          } else {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce2"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "comp"), $fs);
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(comp & fs)\n```\nTakes a list of functions and returns a function that is the composition of those functions.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1338,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1345,
      \Phel\Lang\Keyword::create("column"), 23
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "complement",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\complement";

    public function __invoke($f) {
      return new class($f) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\complement";
        private $f;

        public function __construct($f) {
          $this->f = $f;
        }

        public function __invoke(...$__short_fn_rest_654) {
          $f = $this->f;
          $__short_fn_rest_654 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__short_fn_rest_654);
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "not"))(($f)(...(($__short_fn_rest_654) ?? [])));
        }
      };
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(complement f)\n```\nReturns a function that takes the same arguments as `f` and returns the opposite truth value.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1347,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1350,
      \Phel\Lang\Keyword::create("column"), 22
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "juxt",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\juxt";

    public function __invoke(...$fs) {
      $fs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($fs);
      return new class($fs) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\juxt";
        private $fs;

        public function __construct($fs) {
          $this->fs = $fs;
        }

        public function __invoke(...$args) {
          $fs = $this->fs;
          $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce"))(new class($fs, $args) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\juxt";
            private $fs;
            private $args;

            public function __construct($fs, $args) {
              $this->fs = $fs;
              $this->args = $args;
            }

            public function __invoke($__short_fn_1_655, $__short_fn_2_656) {
              $fs = $this->fs;
              $args = $this->args;
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__short_fn_1_655, ($__short_fn_2_656)(...(($args) ?? [])));
            }
          }, \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]), $fs);
        }
      };
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(juxt & fs)\n```\nTakes a list of functions and returns a new function that is the juxtaposition of those functions.\n  `((juxt a b c) x) => [(a x) (b x) (c x)]`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1352,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1360,
      \Phel\Lang\Keyword::create("column"), 10
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "partial",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\partial";

    public function __invoke($f, ...$args) {
      $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
      return new class($f, $args) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\partial";
        private $f;
        private $args;

        public function __construct($f, $args) {
          $this->f = $f;
          $this->args = $args;
        }

        public function __invoke(...$__short_fn_rest_657) {
          $f = $this->f;
          $args = $this->args;
          $__short_fn_rest_657 = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($__short_fn_rest_657);
          return ($f)(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]), $args, $__short_fn_rest_657)) ?? []));
        }
      };
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(partial f & args)\n```\nTakes a function `f` and fewer than normal arguments of `f` and returns a function\n  that a variable number of additional arguments. When call `f` will be called\n  with `args` and the additional arguments.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1362,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1367,
      \Phel\Lang\Keyword::create("column"), 33
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "tree-seq",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\tree_seq";

    public function __invoke($branch_QMARK_, $children, $root) {
      $ret_658 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "transient"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
      $stack_659 = array($root);
      while (true) {
        if (\Phel\Lang\Truthy::isTruthy(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($stack_659) > 0))) {
          $node_660 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "pop"))($stack_659);
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($ret_658, $node_660);
          if (\Phel\Lang\Truthy::isTruthy(($branch_QMARK_)($node_660))) {
            $__phel_661 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))($stack_659, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reverse"))(($children)($node_660)));
            $stack_659 = $__phel_661;
            continue;

          } else {
            $__phel_662 = $stack_659;
            $stack_659 = $__phel_662;
            continue;

          }

        } else {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "persistent"))($ret_658);
        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(tree-seq branch? children root)\n```\nReturns an vector of the nodes in the tree, via a depth first walk.\n  branch? is a function with one argument that returns true if the given node\n  has children.\n  children must be a function with one argument that returns the children of the node.\n  root the root node of the tree.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1373,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1388,
      \Phel\Lang\Keyword::create("column"), 28
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "flatten",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\flatten";

    public function __invoke($xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "filter"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "complement"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "indexed?")), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "rest"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "tree-seq"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "indexed?"), \Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "identity"), $xs)));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(flatten xs)\n```\nTakes a nested sequential data structure `(tree)`, and returns their contents\n  as a single, flat vector.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1390,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1396,
      \Phel\Lang\Keyword::create("column"), 43
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "bit-and",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\bit_and";

    public function __invoke($x, $y, ...$args) {
      $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
      $all_667 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$x, $y]), $args);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce2"))(new class($x, $y, $args, $all_667) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_and";
        private $x;
        private $y;
        private $args;
        private $all_667;

        public function __construct($x, $y, $args, $all_667) {
          $this->x = $x;
          $this->y = $y;
          $this->args = $args;
          $this->all_667 = $all_667;
        }

        public function __invoke($__short_fn_1_665, $__short_fn_2_666) {
          $x = $this->x;
          $y = $this->y;
          $args = $this->args;
          $all_667 = $this->all_667;
          return ($__short_fn_1_665 & $__short_fn_2_666);
        }
      }, $all_667);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(bit-and x y & args)\n```\nBitwise and.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($x, $y, ...$args) {
        $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/&"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($y), $args)) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1402,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1407,
      \Phel\Lang\Keyword::create("column"), 34
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "bit-or",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\bit_or";

    public function __invoke($x, $y, ...$args) {
      $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
      $all_670 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$x, $y]), $args);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce2"))(new class($x, $y, $args, $all_670) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_or";
        private $x;
        private $y;
        private $args;
        private $all_670;

        public function __construct($x, $y, $args, $all_670) {
          $this->x = $x;
          $this->y = $y;
          $this->args = $args;
          $this->all_670 = $all_670;
        }

        public function __invoke($__short_fn_1_668, $__short_fn_2_669) {
          $x = $this->x;
          $y = $this->y;
          $args = $this->args;
          $all_670 = $this->all_670;
          return ($__short_fn_1_668 | $__short_fn_2_669);
        }
      }, $all_670);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(bit-or x y & args)\n```\nBitwise or.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($x, $y, ...$args) {
        $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/|"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($y), $args)) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1409,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1414,
      \Phel\Lang\Keyword::create("column"), 34
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "bit-xor",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\bit_xor";

    public function __invoke($x, $y, ...$args) {
      $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
      $all_673 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([$x, $y]), $args);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce2"))(new class($x, $y, $args, $all_673) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_xor";
        private $x;
        private $y;
        private $args;
        private $all_673;

        public function __construct($x, $y, $args, $all_673) {
          $this->x = $x;
          $this->y = $y;
          $this->args = $args;
          $this->all_673 = $all_673;
        }

        public function __invoke($__short_fn_1_671, $__short_fn_2_672) {
          $x = $this->x;
          $y = $this->y;
          $args = $this->args;
          $all_673 = $this->all_673;
          return ($__short_fn_1_671 ^ $__short_fn_2_672);
        }
      }, $all_673);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(bit-xor x y & args)\n```\nBitwise xor.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($x, $y, ...$args) {
        $args = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($args);
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/^"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($y), $args)) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1416,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1421,
      \Phel\Lang\Keyword::create("column"), 34
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "bit-not",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\bit_not";

    public function __invoke($x) {
      return ~($x);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(bit-not x)\n```\nBitwise complement.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($x) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/~"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1423,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1427,
      \Phel\Lang\Keyword::create("column"), 12
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "bit-shift-left",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\bit_shift_left";

    public function __invoke($x, $n) {
      return ($x << $n);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(bit-shift-left x n)\n```\nBitwise shift left.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($x, $n) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<<"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($n))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1429,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1433,
      \Phel\Lang\Keyword::create("column"), 15
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "bit-shift-right",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\bit_shift_right";

    public function __invoke($x, $n) {
      return ($x >> $n);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(bit-shift-right x n)\n```\nBitwise shift right.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($x, $n) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/>>"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($n))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1435,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1439,
      \Phel\Lang\Keyword::create("column"), 15
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "bit-set",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\bit_set";

    public function __invoke($x, $n) {
      return ($x | (1 << $n));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(bit-set x n)\n```\nSet bit an index `n`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1441,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1444,
      \Phel\Lang\Keyword::create("column"), 34
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "bit-clear",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\bit_clear";

    public function __invoke($x, $n) {
      return ($x & ~((1 << $n)));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(bit-clear x n)\n```\nClear bit an index `n`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1446,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1449,
      \Phel\Lang\Keyword::create("column"), 45
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "bit-flip",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\bit_flip";

    public function __invoke($x, $n) {
      return ($x ^ (1 << $n));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(bit-flip x n)\n```\nFlip bit at index `n`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1451,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1454,
      \Phel\Lang\Keyword::create("column"), 35
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "bit-test",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\bit_test";

    public function __invoke($x, $n) {
      return (0 != ($x & (1 << $n)));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(bit-test x n)\n```\nTest bit at index `n`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1456,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1459,
      \Phel\Lang\Keyword::create("column"), 46
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "NAN",
  NAN,
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "Constant for Not a Number (NAN) values.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1465,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1467,
      \Phel\Lang\Keyword::create("column"), 10
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "+",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\+";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "empty?"))($xs))) {
        return 0;
      } else {
        return array_reduce([...(($xs) ?? [])], function($a, $b) { return ($a + $b); });
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(+ & xs)\n```\nReturns the sum of all elements in `xs`. All elements `xs` must be numbers.\n  If `xs` is empty, return 0.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke(...$xs) {
        $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/+"))), $xs)) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n > 0);
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1469,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1477,
      \Phel\Lang\Keyword::create("column"), 22
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "-",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\_";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      $__phel_676_677 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_676_677, 0))) {
        return 0;
      } else {
        $__phel_678_679 = $__phel_676_677;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_678_679, 1))) {
          return (-1 * (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs));
        } else {
          $__phel_680_681 = $__phel_678_679;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_680_681, 2))) {
            return ((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs) - (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "second"))($xs));
          } else {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce2"))(new class($xs, $__phel_676_677, $__phel_678_679, $__phel_680_681) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\_";
              private $xs;
              private $__phel_676_677;
              private $__phel_678_679;
              private $__phel_680_681;

              public function __construct($xs, $__phel_676_677, $__phel_678_679, $__phel_680_681) {
                $this->xs = $xs;
                $this->__phel_676_677 = $__phel_676_677;
                $this->__phel_678_679 = $__phel_678_679;
                $this->__phel_680_681 = $__phel_680_681;
              }

              public function __invoke($__short_fn_1_674, $__short_fn_2_675) {
                $xs = $this->xs;
                $__phel_676_677 = $this->__phel_676_677;
                $__phel_678_679 = $this->__phel_678_679;
                $__phel_680_681 = $this->__phel_680_681;
                return ($__short_fn_1_674 - $__short_fn_2_675);
              }
            }, $xs);
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(- & xs)\n```\nReturns the difference of all elements in `xs`. If `xs` is empty, return 0. If `xs`\n  has one element, return the negative value of that element.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke(...$xs) {
        $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/-"))), $xs)) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n > 1);
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1479,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1489,
      \Phel\Lang\Keyword::create("column"), 33
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "*",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\*";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      $__phel_684_685 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_684_685, 0))) {
        return 1;
      } else {
        $__phel_686_687 = $__phel_684_685;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_686_687, 1))) {
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs);
        } else {
          $__phel_688_689 = $__phel_686_687;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_688_689, 2))) {
            return ((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs) * (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "second"))($xs));
          } else {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce2"))(new class($xs, $__phel_684_685, $__phel_686_687, $__phel_688_689) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\*";
              private $xs;
              private $__phel_684_685;
              private $__phel_686_687;
              private $__phel_688_689;

              public function __construct($xs, $__phel_684_685, $__phel_686_687, $__phel_688_689) {
                $this->xs = $xs;
                $this->__phel_684_685 = $__phel_684_685;
                $this->__phel_686_687 = $__phel_686_687;
                $this->__phel_688_689 = $__phel_688_689;
              }

              public function __invoke($__short_fn_1_682, $__short_fn_2_683) {
                $xs = $this->xs;
                $__phel_684_685 = $this->__phel_684_685;
                $__phel_686_687 = $this->__phel_686_687;
                $__phel_688_689 = $this->__phel_688_689;
                return ($__short_fn_1_682 * $__short_fn_2_683);
              }
            }, $xs);
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(* & xs)\n```\nReturns the product of all elements in `xs`. All elements in `xs` must be\nnumbers. If `xs` is empty, return 1.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke(...$xs) {
        $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/*"))), $xs)) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n > 0);
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1491,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1501,
      \Phel\Lang\Keyword::create("column"), 33
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "/",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\/";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      $__phel_692_693 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_692_693, 0))) {
        return 1;
      } else {
        $__phel_694_695 = $__phel_692_693;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_694_695, 1))) {
          return (1 / (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs));
        } else {
          $__phel_696_697 = $__phel_694_695;
          if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_696_697, 2))) {
            return ((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs) / (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "second"))($xs));
          } else {
            return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce2"))(new class($xs, $__phel_692_693, $__phel_694_695, $__phel_696_697) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\/";
              private $xs;
              private $__phel_692_693;
              private $__phel_694_695;
              private $__phel_696_697;

              public function __construct($xs, $__phel_692_693, $__phel_694_695, $__phel_696_697) {
                $this->xs = $xs;
                $this->__phel_692_693 = $__phel_692_693;
                $this->__phel_694_695 = $__phel_694_695;
                $this->__phel_696_697 = $__phel_696_697;
              }

              public function __invoke($__short_fn_1_690, $__short_fn_2_691) {
                $xs = $this->xs;
                $__phel_692_693 = $this->__phel_692_693;
                $__phel_694_695 = $this->__phel_694_695;
                $__phel_696_697 = $this->__phel_696_697;
                return ($__short_fn_1_690 / $__short_fn_2_691);
              }
            }, $xs);
          }

        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(/ & xs)\n```\nReturns the nominator divided by all the denominators. If `xs` is empty,\nreturns 1. If `xs` has one value, returns the reciprocal of x.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke(...$xs) {
        $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php//"))), $xs)) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n > 1);
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1503,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1513,
      \Phel\Lang\Keyword::create("column"), 33
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "%",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\%";

    public function __invoke($dividend, $divisor) {
      return ($dividend % $divisor);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(% dividend divisor)\n```\nReturn the remainder of `dividend` / `divisor`.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($dividend, $divisor) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/%"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($dividend), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($divisor))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1515,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1519,
      \Phel\Lang\Keyword::create("column"), 27
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "**",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\**";

    public function __invoke($a, $x) {
      return ($a ** $x);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(** a x)\n```\nReturn `a` to the power of `x`.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $x) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/**"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($a), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1521,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1525,
      \Phel\Lang\Keyword::create("column"), 15
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "inc",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\inc";

    public function __invoke($x) {
      return ($x + 1);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(inc x)\n```\nIncrements `x` by one.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($x) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/+"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(1))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1527,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1531,
      \Phel\Lang\Keyword::create("column"), 10
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "dec",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\dec";

    public function __invoke($x) {
      return ($x - 1);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(dec x)\n```\nDecrements `x` by one.",
    \Phel\Lang\Keyword::create("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($x) {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/-"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(1))) ?? []));
      }
    },
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1533,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1537,
      \Phel\Lang\Keyword::create("column"), 10
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "even?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\even?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))(0, ($x % 2));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(even? x)\n```\nChecks if `x` is even.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1539,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1542,
      \Phel\Lang\Keyword::create("column"), 16
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "odd?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\odd?";

    public function __invoke($x) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))(1, ($x % 2));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(odd? x)\n```\nChecks if `x` is odd.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1544,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1547,
      \Phel\Lang\Keyword::create("column"), 16
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "zero?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\zero?";

    public function __invoke($x) {
      $__phel_698_699 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($x, 0);
      if (\Phel\Lang\Truthy::isTruthy($__phel_698_699)) {
        return $__phel_698_699;
      } else {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($x, 0.0);
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(zero? x)\n```\nChecks if `x` is zero.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1549,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1552,
      \Phel\Lang\Keyword::create("column"), 25
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "one?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\one?";

    public function __invoke($x) {
      $__phel_700_701 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($x, 1);
      if (\Phel\Lang\Truthy::isTruthy($__phel_700_701)) {
        return $__phel_700_701;
      } else {
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "="))($x, 1.0);
      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(one? x)\n```\nChecks if `x` is one.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1554,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1557,
      \Phel\Lang\Keyword::create("column"), 25
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "pos?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\pos?";

    public function __invoke($x) {
      return ($x > 0);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(pos? x)\n```\nChecks if `x` is greater than zero.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1559,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1562,
      \Phel\Lang\Keyword::create("column"), 10
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "neg?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\neg?";

    public function __invoke($x) {
      return ($x < 0);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(neg? x)\n```\nChecks if `x` is smaller than zero.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1564,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1567,
      \Phel\Lang\Keyword::create("column"), 10
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "nan?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\nan?";

    public function __invoke($x) {
      return is_nan($x);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(nan? x)\n```\nChecks if `x` is not a number.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1569,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1572,
      \Phel\Lang\Keyword::create("column"), 17
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "rand",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\rand";

    public function __invoke() {
      return (random_int(0, PHP_INT_MAX) / PHP_INT_MAX);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(rand )\n```\nReturns a random number between 0 and 1.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1574,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1577,
      \Phel\Lang\Keyword::create("column"), 57
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "rand-int",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\rand_int";

    public function __invoke($n) {
      return random_int(0, $n);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(rand-int n)\n```\nReturns a random number between 0 and `n`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1579,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1582,
      \Phel\Lang\Keyword::create("column"), 23
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "rand-nth",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\rand_nth";

    public function __invoke($xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "get"))($xs, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "rand-int"))(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs) - 1)));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(rand-nth xs)\n```\nReturns a random item from xs.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1584,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1587,
      \Phel\Lang\Keyword::create("column"), 39
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "extreme",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\extreme";

    public function __invoke($order, $args) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reduce2"))(new class($order, $args) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\extreme";
        private $order;
        private $args;

        public function __construct($order, $args) {
          $this->order = $order;
          $this->args = $args;
        }

        public function __invoke($__short_fn_1_702, $__short_fn_2_703) {
          $order = $this->order;
          $args = $this->args;
          if (\Phel\Lang\Truthy::isTruthy(($order)($__short_fn_1_702, $__short_fn_2_703))) {
            return $__short_fn_1_702;
          } else {
            return $__short_fn_2_703;
          }

        }
      }, $args);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(extreme order args)\n```\nReturns the most extreme value in `args` based on the binary `order` function.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1589,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1592,
      \Phel\Lang\Keyword::create("column"), 43
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "min",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\min";

    public function __invoke(...$numbers) {
      $numbers = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($numbers);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "extreme"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "<"), $numbers);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(min & numbers)\n```\nReturns the numeric minimum of all numbers.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1594,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1597,
      \Phel\Lang\Keyword::create("column"), 22
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "max",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\max";

    public function __invoke(...$numbers) {
      $numbers = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($numbers);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "extreme"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", ">"), $numbers);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(max & numbers)\n```\nReturns the numeric maximum of all numbers.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1599,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1602,
      \Phel\Lang\Keyword::create("column"), 22
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "coerce-in",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\coerce_in";

    public function __invoke($v, $min, $max) {
      if (\Phel\Lang\Truthy::isTruthy(($max < $min))) {
        throw (new \InvalidArgumentException("Max values is bigger than min value"));
      } else {

      }

      return max(min($v, $max), $min);
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(coerce-in v min max)\n```\nReturns `v` if it is in the range, or `min` if `v` is less than `min`, or `max` if `v` is greater than `max`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1604,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1609,
      \Phel\Lang\Keyword::create("column"), 32
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "sum",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\sum";

    public function __invoke($xs) {
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "+"))(...(($xs) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(sum xs)\n```\nReturns the sum of all elements is `xs`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1611,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1614,
      \Phel\Lang\Keyword::create("column"), 15
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "mean",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\mean";

    public function __invoke($xs) {
      return ((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "sum"))($xs) / (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(mean xs)\n```\nReturns the mean of `xs`.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1616,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1619,
      \Phel\Lang\Keyword::create("column"), 26
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "with-output-buffer",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\with_output_buffer";

    public function __invoke(...$body) {
      $body = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($body);
      $res_704 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"))();
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/ob_start"))))) ?? []))), $body, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($res_704), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/ob_get_contents"))))) ?? []))))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/ob_end_clean"))))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($res_704))) ?? []))))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(with-output-buffer & body)\n```\nEverything that is printed inside the body will be stored in a buffer.\n   The result of the buffer is returned.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1625,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1635,
      \Phel\Lang\Keyword::create("column"), 17
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "print-str",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\print_str";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      $len_706 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs);
      $printer_707 = (\Phel\Printer\Printer::nonReadable());
      $pp_708 = new class($xs, $len_706, $printer_707) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\print_str.pp";
        private $xs;
        private $len_706;
        private $printer_707;

        public function __construct($xs, $len_706, $printer_707) {
          $this->xs = $xs;
          $this->len_706 = $len_706;
          $this->printer_707 = $printer_707;
        }

        public function __invoke($__short_fn_1_705) {
          $xs = $this->xs;
          $len_706 = $this->len_706;
          $printer_707 = $this->printer_707;
          return (function() use($xs,$len_706,$printer_707,$__short_fn_1_705) {
            $target_715 = $printer_707;
            return $target_715->print($__short_fn_1_705);
          })();
        }
      };
      $__phel_709_710 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($xs);
      if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_709_710, 0))) {
        return "";
      } else {
        $__phel_711_712 = $__phel_709_710;
        if (\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "equals1"))($__phel_711_712, 1))) {
          return ($pp_708)((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs));
        } else {
          $res_713 = ($pp_708)((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($xs));
          $seq_714 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($xs);
          while (true) {
            if (\Phel\Lang\Truthy::isTruthy($seq_714)) {
              $__phel_716 = ("" . $res_713 . " " . ($pp_708)((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($seq_714)));
              $__phel_717 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($seq_714);
              $res_713 = $__phel_716;
              $seq_714 = $__phel_717;
              continue;

            } else {
              return $res_713;
            }
            break;
          }
        }

      }

    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(print-str & xs)\n```\nSame as print. But instead of writing it to a output stream,\n  The resulting string is returned.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1637,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1651,
      \Phel\Lang\Keyword::create("column"), 18
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "print",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\print";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      print((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "print-str"))(...(($xs) ?? [])));
      return null;
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(print & xs)\n```\nPrints the given values to the default output stream. Returns nil.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1653,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1657,
      \Phel\Lang\Keyword::create("column"), 6
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "println",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\println";

    public function __invoke(...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "print"))(...(($xs) ?? []));
      print("\n");
      return null;
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(println & xs)\n```\nSame as print followed by a newline.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1659,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1664,
      \Phel\Lang\Keyword::create("column"), 6
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "format",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\format";

    public function __invoke($fmt, ...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      return sprintf($fmt, ...(($xs) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(format fmt & xs)\n```\nReturns a formatted string. See PHP's [sprintf](https://www.php.net/manual/en/function.sprintf.php) for more information.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1666,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1669,
      \Phel\Lang\Keyword::create("column"), 29
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "printf",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\printf";

    public function __invoke($fmt, ...$xs) {
      $xs = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($xs);
      printf($fmt, ...(($xs) ?? []));
      return null;
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(printf fmt & xs)\n```\nOutput a formatted string. See PHP's [printf](https://www.php.net/manual/en/function.printf.php) for more information.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1671,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1675,
      \Phel\Lang\Keyword::create("column"), 6
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "->",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\_>";

    public function __invoke($x, ...$forms) {
      $forms = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($forms);
      $x_721 = $x;
      $forms_722 = ((\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "empty?"))($forms))) ? null : $forms);
      while (true) {
        if (\Phel\Lang\Truthy::isTruthy($forms_722)) {
          $form_723 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($forms_722);
          $threaded_724 = ((\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list?"))($form_723))) ? (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($form_723)), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x_721), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($form_723))) ?? [])) : (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($form_723, $x_721));
          $__phel_725 = $threaded_724;
          $__phel_726 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($forms_722);
          $x_721 = $__phel_725;
          $forms_722 = $__phel_726;
          continue;

        } else {
          return $x_721;
        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(-> x & forms)\n```\nThreads the expr through the forms. Inserts `x` as the second item\n  in the first from, making a list of it if it is not a list already.\n  If there are more froms, inserts the first form as the second item in\n  the second form, etc.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1681,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1695,
      \Phel\Lang\Keyword::create("column"), 10
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "->>",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\_>>";

    public function __invoke($x, ...$forms) {
      $forms = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($forms);
      $x_729 = $x;
      $forms_730 = ((\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "empty?"))($forms))) ? null : $forms);
      while (true) {
        if (\Phel\Lang\Truthy::isTruthy($forms_730)) {
          $form_731 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($forms_730);
          $threaded_732 = ((\Phel\Lang\Truthy::isTruthy((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list?"))($form_731))) ? (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($form_731)), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($form_731), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($x_729))) ?? [])) : (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($form_731, $x_729));
          $__phel_733 = $threaded_732;
          $__phel_734 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($forms_730);
          $x_729 = $__phel_733;
          $forms_730 = $__phel_734;
          continue;

        } else {
          return $x_729;
        }
        break;
      }
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(->> x & forms)\n```\nThreads the expr through the forms. Inserts `x` as the\n  last item in the first form, making a list of it if it is not a\n  list already. If there are more forms, inserts the first form as the\n  last item in second form, etc.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1697,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1711,
      \Phel\Lang\Keyword::create("column"), 10
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "as->",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\as_>";

    public function __invoke($expr, $name, ...$forms) {
      $forms = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($forms);
      $x_737 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"))();
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($name), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($expr), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "interleave"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "repeat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "count"))($forms), $name), $forms))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($name))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(as-> expr name & forms)\n```\nBinds `name` to `expr`, evaluates the first form in the lexical context\n  of that binding, then binds name to that result, repeating for each\n  successive form, returning the result of the last form.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1713,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1721,
      \Phel\Lang\Keyword::create("column"), 15
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "re-seq",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\re_seq";

    public function __invoke($re, $s) {
      $matches_738 = array();
      $match_result_739 = preg_match_all($re, $s, $matches_738);
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((($matches_738)[(0)] ?? null)) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("doc"), "```phel\n(re-seq re s)\n```\nReturns a sequence of successive matches of pattern in string.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1727,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1732,
      \Phel\Lang\Keyword::create("column"), 41
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "binding",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\binding";

    public function __invoke($bindings, ...$body) {
      $body = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($body);
      $names_740 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "take-nth"))(2, $bindings);
      $vals_741 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "take-nth"))(2, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "drop"))(1, $bindings));
      $orig_val_syms_742 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "map"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"), $names_740);
      $temp_val_syms_743 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "map"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "gensym"), $names_740);
      $binds_744 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "map"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"), $names_740, $temp_val_syms_743);
      $resets_745 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "reverse"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "map"))(\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"), $names_740, $orig_val_syms_742));
      $bind_value_746 = new class($bindings, $body, $names_740, $vals_741, $orig_val_syms_742, $temp_val_syms_743, $binds_744, $resets_745) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\binding.bind_value";
        private $bindings;
        private $body;
        private $names_740;
        private $vals_741;
        private $orig_val_syms_742;
        private $temp_val_syms_743;
        private $binds_744;
        private $resets_745;

        public function __construct($bindings, $body, $names_740, $vals_741, $orig_val_syms_742, $temp_val_syms_743, $binds_744, $resets_745) {
          $this->bindings = $bindings;
          $this->body = $body;
          $this->names_740 = $names_740;
          $this->vals_741 = $vals_741;
          $this->orig_val_syms_742 = $orig_val_syms_742;
          $this->temp_val_syms_743 = $temp_val_syms_743;
          $this->binds_744 = $binds_744;
          $this->resets_745 = $resets_745;
        }

        public function __invoke($__phel_747) {
          $bindings = $this->bindings;
          $body = $this->body;
          $names_740 = $this->names_740;
          $vals_741 = $this->vals_741;
          $orig_val_syms_742 = $this->orig_val_syms_742;
          $temp_val_syms_743 = $this->temp_val_syms_743;
          $binds_744 = $this->binds_744;
          $resets_745 = $this->resets_745;
          $__phel_748_753 = $__phel_747;
          $__phel_749_754 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_748_753);
          $__phel_750_755 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_748_753);
          $k_756 = $__phel_749_754;
          $__phel_751_757 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_750_755);
          $__phel_752_758 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_750_755);
          $v_759 = $__phel_751_757;
          return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("set-var")), $k_756, $v_759);
        }
      };
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "vector"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "interleave"))($orig_val_syms_742, $names_740), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "interleave"))($temp_val_syms_743, $vals_741))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "map"))($bind_value_746, $binds_744), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("try"))), $body, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("finally"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "map"))($bind_value_746, $resets_745))) ?? []))))) ?? []))))) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(binding bindings & body)\n```\nTemporary redefines definitions while executing the body.\n  The value will be reset after the body was executed.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1739,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1756,
      \Phel\Lang\Keyword::create("column"), 42
    )
  )
);
\Phel\Lang\Registry::getInstance()->addDefinition(
  "phel\\core",
  "definterface",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\definterface";

    public function __invoke($name, ...$fns) {
      $fns = \Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray($fns);
      $name_str_760 = (function() use($name,$fns) {
        $target_788 = $name;
        return $target_788->getName();
      })();
      $munge_761 = (new \Phel\Compiler\Emitter\OutputEmitter\Munge());
      $class_name_str_762 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "*ns*") . "\\" . (function() use($name,$fns,$name_str_760,$munge_761) {
        $target_789 = $munge_761;
        return $target_789->encode($name_str_760);
      })());
      $defs_763 = (function() use($name,$fns,$name_str_760,$munge_761,$class_name_str_762) {
        $__phel_764_767 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "var"))(\Phel\Lang\TypeFactory::getInstance()->persistentVectorFromArray([]));
        foreach (($fns ?? []) as $__phel_766) {
          $__phel_768_775 = $__phel_766;
          $__phel_769_776 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_768_775);
          $__phel_770_777 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_768_775);
          $fn_name_778 = $__phel_769_776;
          $__phel_771_779 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_770_777);
          $__phel_772_780 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_770_777);
          $args_781 = $__phel_771_779;
          $__phel_773_782 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($__phel_772_780);
          $__phel_774_783 = (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "next"))($__phel_772_780);
          $doc_784 = $__phel_773_782;
          $fn_name_str_785 = (function() use($name,$fns,$name_str_760,$munge_761,$class_name_str_762,$__phel_764_767,$__phel_766,$__phel_768_775,$__phel_769_776,$__phel_770_777,$fn_name_778,$__phel_771_779,$__phel_772_780,$args_781,$__phel_773_782,$__phel_774_783,$doc_784) {
            $target_790 = $fn_name_778;
            return $target_790->getName();
          })();
          $munged_fn_name_786 = (function() use($name,$fns,$name_str_760,$munge_761,$class_name_str_762,$__phel_764_767,$__phel_766,$__phel_768_775,$__phel_769_776,$__phel_770_777,$fn_name_778,$__phel_771_779,$__phel_772_780,$args_781,$__phel_773_782,$__phel_774_783,$doc_784,$fn_name_str_785) {
            $target_791 = $munge_761;
            return $target_791->encode($fn_name_str_785);
          })();
          $munged_fn_symbol_787 = (\Phel\Lang\Symbol::create($munged_fn_name_786));
          (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "swap!"))($__phel_764_767, new class($name, $fns, $name_str_760, $munge_761, $class_name_str_762, $__phel_764_767, $__phel_766, $__phel_768_775, $__phel_769_776, $__phel_770_777, $fn_name_778, $__phel_771_779, $__phel_772_780, $args_781, $__phel_773_782, $__phel_774_783, $doc_784, $fn_name_str_785, $munged_fn_name_786, $munged_fn_symbol_787) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\definterface.defs";
            private $name;
            private $fns;
            private $name_str_760;
            private $munge_761;
            private $class_name_str_762;
            private $__phel_764_767;
            private $__phel_766;
            private $__phel_768_775;
            private $__phel_769_776;
            private $__phel_770_777;
            private $fn_name_778;
            private $__phel_771_779;
            private $__phel_772_780;
            private $args_781;
            private $__phel_773_782;
            private $__phel_774_783;
            private $doc_784;
            private $fn_name_str_785;
            private $munged_fn_name_786;
            private $munged_fn_symbol_787;

            public function __construct($name, $fns, $name_str_760, $munge_761, $class_name_str_762, $__phel_764_767, $__phel_766, $__phel_768_775, $__phel_769_776, $__phel_770_777, $fn_name_778, $__phel_771_779, $__phel_772_780, $args_781, $__phel_773_782, $__phel_774_783, $doc_784, $fn_name_str_785, $munged_fn_name_786, $munged_fn_symbol_787) {
              $this->name = $name;
              $this->fns = $fns;
              $this->name_str_760 = $name_str_760;
              $this->munge_761 = $munge_761;
              $this->class_name_str_762 = $class_name_str_762;
              $this->__phel_764_767 = $__phel_764_767;
              $this->__phel_766 = $__phel_766;
              $this->__phel_768_775 = $__phel_768_775;
              $this->__phel_769_776 = $__phel_769_776;
              $this->__phel_770_777 = $__phel_770_777;
              $this->fn_name_778 = $fn_name_778;
              $this->__phel_771_779 = $__phel_771_779;
              $this->__phel_772_780 = $__phel_772_780;
              $this->args_781 = $args_781;
              $this->__phel_773_782 = $__phel_773_782;
              $this->__phel_774_783 = $__phel_774_783;
              $this->doc_784 = $doc_784;
              $this->fn_name_str_785 = $fn_name_str_785;
              $this->munged_fn_name_786 = $munged_fn_name_786;
              $this->munged_fn_symbol_787 = $munged_fn_symbol_787;
            }

            public function __invoke($__phel_765) {
              $name = $this->name;
              $fns = $this->fns;
              $name_str_760 = $this->name_str_760;
              $munge_761 = $this->munge_761;
              $class_name_str_762 = $this->class_name_str_762;
              $__phel_764_767 = $this->__phel_764_767;
              $__phel_766 = $this->__phel_766;
              $__phel_768_775 = $this->__phel_768_775;
              $__phel_769_776 = $this->__phel_769_776;
              $__phel_770_777 = $this->__phel_770_777;
              $fn_name_778 = $this->fn_name_778;
              $__phel_771_779 = $this->__phel_771_779;
              $__phel_772_780 = $this->__phel_772_780;
              $args_781 = $this->args_781;
              $__phel_773_782 = $this->__phel_773_782;
              $__phel_774_783 = $this->__phel_774_783;
              $doc_784 = $this->doc_784;
              $fn_name_str_785 = $this->fn_name_str_785;
              $munged_fn_name_786 = $this->munged_fn_name_786;
              $munged_fn_symbol_787 = $this->munged_fn_symbol_787;
              return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "push"))($__phel_765, (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($fn_name_778), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "hash-map"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(\Phel\Lang\Keyword::create("doc")), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($doc_784))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($args_781), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/is_a"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($args_781)), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($class_name_str_762))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/->"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "first"))($args_781)), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($munged_fn_symbol_787), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "rest"))($args_781))) ?? []))))) ?? []))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("throw"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\InvalidArgumentException"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(("" . "Value doesn't implement interface " . $name)))) ?? []))))) ?? []))))) ?? []))))) ?? [])));
            }
          });
        }
        return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "deref"))($__phel_764_767);
      })();
      return (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))(...(((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "concat"))((\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("definterface*"))), (\Phel\Lang\Registry::getInstance()->getDefinition("phel\\core", "list"))($name), $fns)) ?? []))), $defs_763)) ?? []));
    }
  },
  \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
    \Phel\Lang\Keyword::create("macro"), true,
    \Phel\Lang\Keyword::create("doc"), "```phel\n(definterface name & fns)\n```\nDefines an interface.",
    \Phel\Lang\Keyword::create("start-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1762,
      \Phel\Lang\Keyword::create("column"), 0
    ),
    \Phel\Lang\Keyword::create("end-location"), \Phel\Lang\TypeFactory::getInstance()->persistentMapFromKVs(
      \Phel\Lang\Keyword::create("file"), "/Users/adam/Projects/phel-example-1/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel\Lang\Keyword::create("line"), 1779,
      \Phel\Lang\Keyword::create("column"), 14
    )
  )
);
