import React from 'react'
import Router from './router'
import {QueryClient,QueryClientProvider} from 'react-query'

const App: React.VFC = () => {
    const queryClient = new QueryClient({
        defaultOptions: {
            queries: {
                retry: false //エラー時に何回再取得を行うか。今回は再取得しない為、false
            },
            mutations: {
                retry: false //データ更新時に使用する設定値。今回は使用しない為、false
            }
        }
    })


    return(
        <QueryClientProvider client={queryClient}>
            <Router />
        </QueryClientProvider>
    )
}

export default App

