#!/bin/sh
input="/code/env/env.config"
while IFS= read -r line
do
  export $line
done < "$input"