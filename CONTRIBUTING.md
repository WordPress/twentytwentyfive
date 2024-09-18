# Contributing

## Tools

### Escape pattern strings

```sh-session
$ node theme-utils.mjs help escape-patterns

escape-patterns [--domains=DOMAINS] <array of theme directories>

Escapes block patterns for pattern files.

--domains=DOMAINS

        Array of text domains mapping to themes

```

### Theme validation

```sh-session
$ node theme-utils.mjs help validate-theme                    

validate-theme [--format=FORMAT] [--color=WHEN] [--table-width=COLUMNS] <array of theme slugs>

Validates a theme against the WordPress theme requirements.

--format=FORMAT

        Output format. Possible values: *table*, json, dir.

--color=WHEN

        Colorize the output for table or dir formats. The automatic mode only enables colors if 
        an interactive terminal is detected. Possible values: *auto*, always, never.

--table-width=COLUMNS

        Explicitly set the width of the table format instead of determining it automatically.
        Will default to 120 if omitted and width cannot be determined automatically.

```
