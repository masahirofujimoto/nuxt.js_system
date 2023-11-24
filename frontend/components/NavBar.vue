<template>
  <nav class="bg-gray-800 text-white">
    <ul class="flex justify-center space-x-4 py-4">
      <li><nuxt-link to="/" class="hover:text-gray-300">ホーム</nuxt-link></li>
      <li><nuxt-link to="/genre" class="hover:text-gray-300">ジャンル</nuxt-link></li>
      <li><nuxt-link to="/profile" class="hover:text-gray-300">プロフィール</nuxt-link></li>
       <li><nuxt-link to="/login" class="hover:text-gray-300">ログイン</nuxt-link></li>
    </ul>
  </nav>
</template>

<script>
export default {
  // コンポーネントの設定
}
</script>

<style>
/* ここにナビゲーションバーのスタイルを追加 */
</style>
