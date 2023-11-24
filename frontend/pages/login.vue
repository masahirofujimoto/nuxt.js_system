<template>
  <div class="container mx-auto p-4">
    <form @submit.prevent="login">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
          名前
        </label>
        <input v-model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="名前">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
          メールアドレス
        </label>
        <input v-model="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="example@example.com">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          パスワード
        </label>
        <input v-model="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          ログイン
        </button>
      </div>

       <div v-if="errorMessage" class="text-red-500">{{ errorMessage }}</div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
        name: '',
        email: '',
        password: '',
        errorMessage: ''
    };
  },
  methods: {
    async login() {
      try {
        console.log("ログインメソッドが呼ばれました");
        console.log("送信するための値:", this.name, this.email, this.password);
        // Laravelの認証APIにリクエストを送信
        let response = await this.$axios.post('/api/login', {
          name: this.name,
          email: this.email,
          password: this.password

        });
        console.log("レスポンス:", response);


        if (response.status === 200) {
          // 認証成功時の処理
          this.$router.push('/'); // index.vueへリダイレクト
        }

        // 成功した場合の処理
      } catch (error) {
        console.log(error);
        if (error.response && error.response.status === 401) {
          // 認証失敗時のエラーメッセージを設定
          this.errorMessage = error.response.data.message;
          this.errorMessage = error.message || "ログインエラーが発生しました。";
        }
      }
    }
  }
}
</script>

<style>
/* スタイル設定 */
</style>
