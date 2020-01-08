# php7codeigniter-on-docker

## メモ


### マイグレーション

```
php index.php migrate latest
```

### デバッグ

- ↓を記述すると、var_dumpよりもいい感じの情報を出してくれる

```
    $this->output->enable_profiler();
```