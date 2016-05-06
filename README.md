# Islandora Blocks

## Introduction

This module exposes several supplementary blocks that complement/replace some
of the core functionality that currently lives in templates within islandora
core.

## Requirements

- Block
- [Islandora](https://github.com/islandora/islandora)
- [CSL](https://github.com/Islandora/islandora_scholar/tree/7.x/modules/csl) (optional)

## Installation

Enable the module.

## Configuration

This module exposes four additional blocks that only appear on islandora object
view callbacks:

- Object Metadata (standard metadata block)
- Object Datastreams (standard "File Details" block)
- Object Collections (standard "Parent Collections" block)
- Object Citation (provides a citation using the CSL module for objects with a 
MODS datastream)

## Maintainers/Sponsors

Current maintainer:

- [Luke Bainbridge](https://github.com/midnightluke)

## License

[GPLv3](http://www.gnu.org/licenses/gpl-3.0.txt)
